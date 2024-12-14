<?php
include 'connection.php'; // File koneksi ke database

header("Content-Type: application/json");

// Cek apakah nim ada dalam sesi
session_start();
if (!isset($_SESSION['nim'])) {
    echo json_encode(['error' => 'NIM tidak ditemukan dalam sesi.']);
    exit();
}

$nim = $_SESSION['nim']; // Ambil NIM dari sesi
$input = json_decode(file_get_contents('php://input'), true); // Ambil data dari request JSON

// Validasi data input
$email = $input['email'] ?? null;
$nohp = $input['nohp'] ?? null;

if (empty($email) || empty($nohp)) {
    echo json_encode(['error' => 'Email dan No. HP tidak boleh kosong.']);
    exit();
}

// Query untuk memperbarui data mahasiswa
$query = "
UPDATE Mahasiswa
SET email = ?, nohp_mhs = ?
WHERE nim = ?;
";

$params = [$email, $nohp, $nim];
$stmt = sqlsrv_query($conn, $query, $params);

if ($stmt === false) {
    echo json_encode(['error' => 'Kesalahan saat memperbarui data: ' . print_r(sqlsrv_errors(), true)]);
    exit();
}

if (!$stmt) {
    echo json_encode(['error' => 'Kesalahan query: ' . print_r(sqlsrv_errors(), true)]);
    exit();
}


echo json_encode(['success' => 'Data berhasil diperbarui.']);
sqlsrv_close($conn);
