<?php
session_start();
include 'connection.php';

// Pastikan session ID Pegawai tersedia
if (!isset($_SESSION['id_pegawai'])) {
    http_response_code(401); // Unauthorized
    echo json_encode(['error' => 'Unauthorized']);
    exit();
}

$id_pegawai = $_SESSION['id_pegawai']; // Asumsikan ini adalah varchar, bukan int

// Query untuk mendapatkan notifikasi
$query = "SELECT isi, CONVERT(VARCHAR, waktu_dibuat, 120) AS waktu_dibuat, status_notifikasi 
          FROM Notifikasi 
          WHERE id_pegawai = ? 
          ORDER BY waktu_dibuat DESC";

$params = [$id_pegawai]; // pastikan $id_pegawai adalah string
$stmt = sqlsrv_query($conn, $query, $params);

if ($stmt === false) {
    http_response_code(500); // Internal Server Error
    echo json_encode(['error' => 'Error fetching notifications: ' . print_r(sqlsrv_errors(), true)]);
    exit();
}

// Ambil hasil query
$notifikasi = [];
while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    $notifikasi[] = $row;
}

// Tutup koneksi dan kirim data sebagai JSON
sqlsrv_close($conn);
header('Content-Type: application/json');
echo json_encode($notifikasi);
?>
