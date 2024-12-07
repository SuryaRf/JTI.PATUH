<?php
session_start();
include 'connection.php';

if (!isset($_SESSION['nim'])) {
    header("Content-Type: application/json");
    echo json_encode(['error' => 'NIM tidak ditemukan dalam sesi']);
    exit;
}

$nim = $_SESSION['nim'];

$query = "
SELECT 
    Pelanggaran.id_pelanggaran,
    Pelanggaran.waktu_pelanggaran,
    Pelanggaran.lokasi,
    Pelanggaran.status,
    TataTertib.nama_pelanggaran,
    Pelanggaran.nim AS nim_terlapor,
    Terlapor.nama_mhs AS nama_terlapor,
    Pelanggaran.nim_pelapor,
    Pelapor.nama_mhs AS nama_pelapor
FROM Pelanggaran
LEFT JOIN Mahasiswa Pelapor ON Pelanggaran.nim_pelapor = Pelapor.nim
LEFT JOIN Mahasiswa Terlapor ON Pelanggaran.nim = Terlapor.nim
INNER JOIN TataTertib ON Pelanggaran.id_tatib = TataTertib.id_tatib
WHERE Pelanggaran.nim = ? OR Pelanggaran.nim_pelapor = ?
ORDER BY Pelanggaran.waktu_pelanggaran DESC;

";

$params = [$nim, $nim];
$stmt = sqlsrv_query($conn, $query, $params);

if ($stmt === false) {
    header("Content-Type: application/json");
    echo json_encode(['error' => 'Kesalahan query: ' . print_r(sqlsrv_errors(), true)]);
    exit;
}

$violations = [];
while ($data = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    if (isset($data['waktu_pelanggaran']) && $data['waktu_pelanggaran'] instanceof DateTime) {
        $data['waktu_pelanggaran'] = $data['waktu_pelanggaran']->format('Y-m-d H:i:s');
    } else {
        $data['waktu_pelanggaran'] = null;
    }
    $violations[] = $data;
}

header("Content-Type: application/json");
echo json_encode($violations);

sqlsrv_close($conn);
