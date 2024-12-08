<?php
include 'connection.php';
header("Content-Type: application/json");

// Periksa apakah ID disertakan
if (!isset($_GET['id'])) {
    echo json_encode(['error' => 'ID tidak valid atau tidak disertakan.']);
    exit();
}

$id_pelanggaran = $_GET['id'];

// Query untuk mengambil detail pelanggaran
$query = "
    SELECT 
        p.id_pelanggaran,
        p.nim AS nim_terlapor,
        p.waktu_pelanggaran,
        p.lokasi,
        p.status,
        p.bukti_foto,
        m.nama_mhs AS nama_terlapor,
        t.nama_pelanggaran AS jenis_pelanggaran,
        t.tingkat_pelanggaran
    FROM Pelanggaran p
    JOIN Mahasiswa m ON p.nim = m.nim
    JOIN TataTertib t ON p.id_tatib = t.id_tatib
    WHERE p.id_pelanggaran = ?";

$params = [$id_pelanggaran];
$stmt = sqlsrv_query($conn, $query, $params);

if ($stmt === false) {
    echo json_encode(['error' => 'Kesalahan query: ' . print_r(sqlsrv_errors(), true)]);
    exit();
}

$data = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

if (!$data) {
    echo json_encode(['error' => 'Pelanggaran tidak ditemukan.']);
} else {
    // Format waktu pelanggaran
    if (isset($data['waktu_pelanggaran']) && $data['waktu_pelanggaran'] instanceof DateTime) {
        $data['waktu_pelanggaran'] = $data['waktu_pelanggaran']->format('Y-m-d H:i:s');
    } else {
        $data['waktu_pelanggaran'] = null;
    }

    // Tentukan URL gambar
    $data['bukti_foto_url'] = $data['bukti_foto']
        ? 'http://' . $_SERVER['HTTP_HOST'] . $data['bukti_foto']
        : null;

    echo json_encode($data);
}

sqlsrv_close($conn);
?>
