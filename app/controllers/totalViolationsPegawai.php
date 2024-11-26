<?php
session_start();
include 'connection.php';

// Cek apakah sesi id_pegawai ada
if (!isset($_SESSION['id_pegawai'])) {
    error_log("DEBUG: Sesi id_pegawai tidak ditemukan. Sesi saat ini: " . print_r($_SESSION, true)); // Debugging
    die(json_encode(['error' => 'id_pegawai tidak ditemukan dalam sesi']));
}

$id_pegawai = $_SESSION['id_pegawai']; // Ambil id_pegawai dari sesi

// Query untuk mengambil data laporan
$query = "
    SELECT 
        COUNT(*) AS total_laporan,
        SUM(CASE WHEN status = 'valid' THEN 1 ELSE 0 END) AS laporan_selesai,
        SUM(CASE WHEN status = 'Pending' THEN 1 ELSE 0 END) AS laporan_tertunda,
        SUM(CASE WHEN status = 'Reject' THEN 1 ELSE 0 END) AS laporan_tertolak
    FROM Pelanggaran
    WHERE id_pegawai = ?;
";
$params = array($id_pegawai);

// Menjalankan query
$stmt = sqlsrv_query($conn, $query, $params);

if ($stmt === false) {
    error_log("DEBUG: Kesalahan query: " . print_r(sqlsrv_errors(), true)); // Debugging
    die(json_encode(['error' => 'Kesalahan query']));
}

// Mengambil hasil query
$data = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

if ($data) {
    error_log("DEBUG: Data yang diterima: " . print_r($data, true)); // Debugging
    header("Content-Type: application/json");
    echo json_encode($data);
} else {
    error_log("DEBUG: Data tidak ditemukan.");
    header("Content-Type: application/json");
    echo json_encode(['error' => 'Data tidak ditemukan']);
}

// Menutup koneksi
sqlsrv_close($conn);
