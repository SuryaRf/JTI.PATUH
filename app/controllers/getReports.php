<?php
session_start();
include 'connection.php';

// Pastikan `nim` tersedia di sesi
if (!isset($_SESSION['nim'])) {
    die(json_encode(['error' => 'NIM tidak ditemukan dalam sesi']));
}

$nim = $_SESSION['nim'];

// Query untuk mengambil data laporan yang diajukan oleh mahasiswa
$querySubmitted = "
    SELECT 
        Pelanggaran.id_pelanggaran,
        Pelanggaran.waktu_pelanggaran,
        Pelanggaran.lokasi,
        Pelanggaran.status,
        TataTertib.nama_pelanggaran
    FROM Pelanggaran
    INNER JOIN TataTertib ON Pelanggaran.id_tatib = TataTertib.id_tatib
    WHERE Pelanggaran.nim_pelapor = ?  -- NIM pelapor
    ORDER BY Pelanggaran.id_pelanggaran DESC
";

// Query untuk mengambil data laporan yang diterima (di mana mahasiswa adalah terlapor)
$queryReceived = "
    SELECT 
        Pelanggaran.id_pelanggaran,
        Pelanggaran.waktu_pelanggaran,
        Pelanggaran.lokasi,
        Pelanggaran.status,
        TataTertib.nama_pelanggaran
    FROM Pelanggaran
    INNER JOIN TataTertib ON Pelanggaran.id_tatib = TataTertib.id_tatib
    WHERE Pelanggaran.nim = ?  -- NIM terlapor
    ORDER BY Pelanggaran.id_pelanggaran DESC
";

// Ambil laporan yang diajukan
$paramsSubmitted = array($nim);
$stmtSubmitted = sqlsrv_query($conn, $querySubmitted, $paramsSubmitted);

if ($stmtSubmitted === false) {
    die(json_encode(['error' => 'Kesalahan query: ' . print_r(sqlsrv_errors(), true)]));
}

// Menyimpan hasil query ke dalam array
$submittedViolations = array();
while ($data = sqlsrv_fetch_array($stmtSubmitted, SQLSRV_FETCH_ASSOC)) {
    $submittedViolations[] = $data;
}

// Ambil laporan yang diterima
$paramsReceived = array($nim);
$stmtReceived = sqlsrv_query($conn, $queryReceived, $paramsReceived);

if ($stmtReceived === false) {
    die(json_encode(['error' => 'Kesalahan query: ' . print_r(sqlsrv_errors(), true)]));
}

// Menyimpan hasil query ke dalam array
$receivedViolations = array();
while ($data = sqlsrv_fetch_array($stmtReceived, SQLSRV_FETCH_ASSOC)) {
    $receivedViolations[] = $data;
}

// Mengirimkan data dalam format JSON
header("Content-Type: application/json");
echo json_encode([
    'submitted' => $submittedViolations,
    'received' => $receivedViolations
]);

sqlsrv_close($conn);
?>