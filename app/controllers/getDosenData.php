<?php
include 'connection.php'; // Pastikan file ini berisi koneksi ke database

header("Content-Type: application/json");

// Cek apakah id_pegawai ada dalam sesi
session_start();

if (!isset($_SESSION['id_pegawai'])) {
    echo json_encode(['error' => 'ID Pegawai tidak ditemukan dalam sesi.']);
    exit();
}

$id_pegawai = $_SESSION['id_pegawai']; // Ambil id_pegawai dari sesi

// Query untuk mengambil data admin berdasarkan id_pegawai
$query = "
    SELECT id_pegawai, nama_pgw, jk_pegawai, nohp_pgw, email, nip , nidn
    FROM Pegawai 
    WHERE id_pegawai = ?
";

$params = [$id_pegawai];
$stmt = sqlsrv_query($conn, $query, $params);

if ($stmt === false) {
    echo json_encode(['error' => 'Kesalahan saat mengambil data: ' . print_r(sqlsrv_errors(), true)]);
    exit;
}

$data = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

if ($data) {
    echo json_encode($data); // Mengembalikan data dalam format JSON
} else {
    echo json_encode(['error' => 'Data admin tidak ditemukan.']);
}

sqlsrv_close($conn);
?>
