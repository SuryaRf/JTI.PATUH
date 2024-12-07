<?php
include 'connection.php'; // Pastikan file ini berisi koneksi ke database

header("Content-Type: application/json");

// Cek apakah nim ada dalam sesi
session_start();

if (!isset($_SESSION['nim'])) {
    echo json_encode(['error' => 'NIM tidak ditemukan dalam sesi.']);
    exit();
}

$nim = $_SESSION['nim']; // Ambil nim dari sesi

// Query untuk mengambil data admin berdasarkan nim
$query = "
SELECT nim, nama_mhs, email, kelas, prodi, jurusan, jk_mhs, nohp_mhs
    FROM Mahasiswa 
    WHERE nim = ?;
";

$params = [$nim];
$stmt = sqlsrv_query($conn, $query, $params);

if ($stmt === false) {
    echo json_encode(['error' => 'Kesalahan saat mengambil data: ' . print_r(sqlsrv_errors(), true)]);
    exit;
}

$data = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

if ($data) {
    header("Content-Type: application/json");
    echo json_encode($data, JSON_PRETTY_PRINT); // Tambahkan untuk melihat JSON dalam format rapi
} else {
    echo json_encode(['error' => 'Data mahasiswa tidak ditemukan.']);
}

sqlsrv_close($conn);
