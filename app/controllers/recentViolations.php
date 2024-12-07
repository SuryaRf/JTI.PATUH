<?php
session_start();
include 'connection.php';

// Pastikan `nim` tersedia di sesi
if (!isset($_SESSION['nim'])) {
    die(json_encode(['error' => 'NIM tidak ditemukan dalam sesi']));
}

$nim = $_SESSION['nim'];

// Query untuk mengambil data pelanggaran berdasarkan NIM
$query = "
    SELECT TOP 5
        Pelanggaran.id_pelanggaran,
        Pelanggaran.waktu_pelanggaran,
        Pelanggaran.lokasi,
        Pelanggaran.status,
        TataTertib.nama_pelanggaran
    FROM Pelanggaran
    INNER JOIN TataTertib ON Pelanggaran.id_tatib = TataTertib.id_tatib
    WHERE Pelanggaran.nim = ? -- Filter berdasarkan nim
    ORDER BY Pelanggaran.id_pelanggaran DESC
";

$params = array($nim); // Gunakan nim sebagai parameter
$stmt = sqlsrv_query($conn, $query, $params);

if ($stmt === false) {
    die(json_encode(['error' => 'Kesalahan query: ' . print_r(sqlsrv_errors(), true)]));
}

// Menyimpan hasil query ke dalam array
$violations = array();
while ($data = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    $violations[] = $data;
}

// Mengirimkan data dalam format JSON
header("Content-Type: application/json");
echo json_encode($violations);

sqlsrv_close($conn);
?>
