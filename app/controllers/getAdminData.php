<?php
include 'connection.php'; // Pastikan file ini berisi koneksi ke database

header("Content-Type: application/json");

$query = "SELECT id_pegawai, nama_pgw, jk_pegawai, nohp_pgw, email, nip 
          FROM Pegawai 
          WHERE nip IS NOT NULL OR nidn IS NULL"; 

$stmt = sqlsrv_query($conn, $query);

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
