<?php
session_start();
include 'connection.php';

if (!isset($_SESSION['id_pegawai'])) {
    die(json_encode(['error' => 'id_pegawai tidak ditemukan dalam sesi']));
}

$id_pegawai = $_SESSION['id_pegawai'];

$query = "
    SELECT 
        COUNT(*) AS total_laporan,
        SUM(CASE WHEN status = 'valid' THEN 1 ELSE 0 END) AS laporan_selesai,
        SUM(CASE WHEN status = 'Pending' THEN 1 ELSE 0 END) AS laporan_tertunda,
        SUM(CASE WHEN status = 'Reject' THEN 1 ELSE 0 END) AS laporan_tertolak
    FROM Pelanggaran;
";
$params = array($id_pegawai);
$stmt = sqlsrv_query($conn, $query, $params);

if ($stmt === false) {
    die(json_encode(['error' => 'Kesalahan query: ' . print_r(sqlsrv_errors(), true)]));
}

$data = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

header("Content-Type: application/json");
echo json_encode($data);

sqlsrv_close($conn);
