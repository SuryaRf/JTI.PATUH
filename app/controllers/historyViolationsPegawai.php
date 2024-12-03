<?php
session_start();
include 'connection.php';

if (!isset($_SESSION['id_pegawai'])) {
    header("Content-Type: application/json");
    echo json_encode(['error' => 'id_pegawai tidak ditemukan dalam sesi']);
    exit;
}

$id_pegawai = $_SESSION['id_pegawai'];

$query = "
    SELECT 
        Pelanggaran.id_pelanggaran,
        Pelanggaran.waktu_pelanggaran,
        Pelanggaran.lokasi,
        Pelanggaran.status,
        TataTertib.nama_pelanggaran,
        Pelanggaran.id_pegawai,
        Pegawai.nama_pgw AS nama_pegawai_pelapor,
        Pelanggaran.nim_pelapor,
        Pelapor.nama_mhs AS nama_pelapor,
        Pelanggaran.nim AS nim_terlapor,
        Terlapor.nama_mhs AS nama_terlapor
    FROM Pelanggaran
    LEFT JOIN Pegawai ON Pelanggaran.id_pegawai = Pegawai.id_pegawai
    LEFT JOIN Mahasiswa Pelapor ON Pelanggaran.nim_pelapor = Pelapor.nim
    LEFT JOIN Mahasiswa Terlapor ON Pelanggaran.nim = Terlapor.nim
    INNER JOIN TataTertib ON Pelanggaran.id_tatib = TataTertib.id_tatib
    ORDER BY Pelanggaran.waktu_pelanggaran DESC
";

$stmt = sqlsrv_query($conn, $query);

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
