<?php
session_start();
include 'connection.php';

// Cek apakah session NIM tersedia
if (!isset($_SESSION['nim'])) {
    http_response_code(401); // Unauthorized
    echo json_encode(['error' => 'Unauthorized. NIM tidak ditemukan dalam sesi.']);
    exit();
}

$nim = $_SESSION['nim']; // Pastikan ini sesuai dengan tipe data varchar

// Query untuk mendapatkan notifikasi
$query = "SELECT id_notifikasi, isi, 
                 CONVERT(VARCHAR, waktu_dibuat, 120) AS waktu_dibuat, 
                 status_notifikasi, pdf_url
          FROM Notifikasi 
          WHERE nim = ? 
          ORDER BY waktu_dibuat DESC";

$params = [$nim];
$stmt = sqlsrv_query($conn, $query, $params);

// Jika query gagal
if ($stmt === false) {
    http_response_code(500); // Internal Server Error
    echo json_encode(['error' => 'Error fetching notifications.', 'details' => sqlsrv_errors()]);
    exit();
}

// Ambil hasil query
$notifikasi = [];
while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    $notifikasi[] = [
        'id_notifikasi' => $row['id_notifikasi'],
        'isi' => $row['isi'],
        'status_notifikasi' => $row['status_notifikasi'],
        'waktu_dibuat' => $row['waktu_dibuat'],
        'pdf_url' => $row['pdf_url']
    ];
}

// Tutup koneksi
sqlsrv_close($conn);

// Kirim data sebagai JSON
header('Content-Type: application/json');
echo json_encode($notifikasi);
