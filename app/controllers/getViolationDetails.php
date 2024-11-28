<?php
include 'connection.php';
header("Content-Type: application/json");

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo json_encode(['error' => 'ID tidak valid atau tidak disertakan.']);
    exit();
}

$id_pelanggaran = (int)$_GET['id'];

$query = "
    SELECT 
        p.id_pelanggaran,
        p.waktu_pelanggaran, 
        p.lokasi, 
        p.status, 
        p.bukti_foto, 
        p.nim AS nim_terlapor, 
        terlapor.nama_mhs AS nama_terlapor,
        p.nim_pelapor, 
        pelapor.nama_mhs AS nama_pelapor, 
        p.id_pegawai, 
        pegawai.nama_pgw AS nama_pegawai_pelapor,
        t.nama_pelanggaran AS jenis_pelanggaran, 
        t.tingkat_pelanggaran
    FROM Pelanggaran p
    LEFT JOIN Mahasiswa terlapor ON p.nim = terlapor.nim
    LEFT JOIN Mahasiswa pelapor ON p.nim_pelapor = pelapor.nim
    LEFT JOIN Pegawai pegawai ON p.id_pegawai = pegawai.id_pegawai
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

    // Tentukan pelapor
    if ($data['nim_pelapor'] !== null) {
        $data['pelapor'] = [
            'type' => 'Mahasiswa',
            'id' => $data['nim_pelapor'],
            'name' => $data['nama_pelapor']
        ];
    } elseif ($data['id_pegawai'] !== null) {
        $data['pelapor'] = [
            'type' => 'Pegawai',
            'id' => $data['id_pegawai'],
            'name' => $data['nama_pegawai_pelapor']
        ];
    } else {
        $data['pelapor'] = null;
    }

    echo json_encode($data);
}

sqlsrv_close($conn);
?>
