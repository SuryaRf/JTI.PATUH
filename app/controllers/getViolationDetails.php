<?php
include 'connection.php';

if (!isset($_GET['id'])) {
    echo json_encode(['error' => 'ID tidak disertakan.']);
    exit;
}

$id_pelanggaran = $_GET['id'];

$query = "SELECT p.waktu_pelanggaran, p.lokasi, p.status, p.bukti_foto, 
                 m.nama_mhs AS nama_mahasiswa, m.nim, 
                 t.nama_pelanggaran AS jenis_pelanggaran, t.tingkat_pelanggaran
          FROM Pelanggaran p
          JOIN Mahasiswa m ON p.nim = m.nim
          JOIN TataTertib t ON p.id_tatib = t.id_tatib
          WHERE p.id_pelanggaran = ?";
$params = [$id_pelanggaran];
$stmt = sqlsrv_query($conn, $query, $params);

if ($stmt === false) {
    echo json_encode(['error' => 'Kesalahan query: ' . print_r(sqlsrv_errors(), true)]);
    exit;
}

$data = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
if (!$data) {
    echo json_encode(['error' => 'Pelanggaran tidak ditemukan.']);
} else {
    // Encode data bukti foto ke base64
    if ($data['bukti_foto']) {
        $data['bukti_foto'] = base64_encode($data['bukti_foto']);
    }
    echo json_encode($data);
}

sqlsrv_close($conn);
