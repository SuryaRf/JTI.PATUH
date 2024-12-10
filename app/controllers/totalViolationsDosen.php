<?php
session_start();
include 'connection.php'; // Pastikan file ini benar

// Cek apakah sesi nim ada
if (!isset($_SESSION['id_pegawai'])) {
    die(json_encode(['error' => 'id_pegawai tidak ditemukan dalam sesi']));
}

$id_pegawai = $_SESSION['id_pegawai']; // Ambil id_pegawai dari sesi

// Query untuk mengambil data laporan
$query = "
    SELECT 
        COUNT(*) AS total_laporan,
        SUM(CASE WHEN status = 'valid' THEN 1 ELSE 0 END) AS laporan_selesai,
        SUM(CASE WHEN status = 'Pending' THEN 1 ELSE 0 END) AS laporan_tertunda
    FROM Pelanggaran p
    JOIN Pegawai ON p.id_pegawai = Pegawai.id_pegawai
    WHERE Pegawai.id_pegawai = ?;
";
$params = array($id_pegawai);

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
