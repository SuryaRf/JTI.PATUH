<?php
session_start();
include 'connection.php'; // Pastikan file ini benar

// Cek apakah sesi nim ada
if (!isset($_SESSION['nim'])) {
    die(json_encode(['error' => 'NIM tidak ditemukan dalam sesi']));
}

$nim = $_SESSION['nim']; // Ambil NIM dari sesi

// Query untuk mengambil data laporan
$query = "
    SELECT 
        COUNT(*) AS total_laporan,
        SUM(CASE WHEN status = 'valid' THEN 1 ELSE 0 END) AS laporan_selesai,
        SUM(CASE WHEN status = 'Pending' THEN 1 ELSE 0 END) AS laporan_tertunda
    FROM Pelanggaran p
    JOIN Mahasiswa m ON p.nim = m.nim
    WHERE m.nim = ?;
";
$params = array($nim);

// Menjalankan query
$stmt = sqlsrv_query($conn, $query, $params);

if ($stmt === false) {
    die(json_encode(['error' => 'Kesalahan query: ' . print_r(sqlsrv_errors(), true)]));
}

// Mengambil hasil query
$data = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

echo json_encode($data);
// Debugging data
if ($data) {
    // Debug: tampilkan data yang diterima
    error_log("DEBUG: Data yang diterima: " . print_r($data, true));
} else {
    error_log("DEBUG: Data tidak ditemukan.");
}

header("Content-Type: application/json");

// Menampilkan hasil dalam format JSON

// Menutup koneksi
sqlsrv_close($conn);


?>
