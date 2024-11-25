<?php
session_start();
include 'connection.php'; // Pastikan file ini benar

// Cek apakah sesi nim atau id_pegawai ada
if (!isset($_SESSION['nim']) && !isset($_SESSION['id_pegawai'])) {
    echo json_encode(['error' => 'NIM atau ID Pegawai tidak ditemukan dalam sesi']);
    exit;
}

// Gunakan nim untuk mahasiswa atau id_pegawai untuk pegawai
$identifier = isset($_SESSION['nim']) ? $_SESSION['nim'] : $_SESSION['id_pegawai'];
$query = "
    SELECT 
        COUNT(*) AS total_laporan,
        SUM(CASE WHEN status = 'valid' THEN 1 ELSE 0 END) AS laporan_selesai,
        SUM(CASE WHEN status = 'Pending' THEN 1 ELSE 0 END) AS laporan_tertunda,
        SUM(CASE WHEN status = 'Reject' THEN 1 ELSE 0 END) AS laporan_tertolak
    FROM Pelanggaran
    WHERE nim = ? OR id_pegawai = ?;
";
$params = array($identifier, $identifier);

// Jalankan query
$stmt = sqlsrv_query($conn, $query, $params);

if ($stmt === false) {
    error_log("Kesalahan query: " . print_r(sqlsrv_errors(), true)); // Hanya log di server
    echo json_encode(['error' => 'Terjadi kesalahan pada server.']);
    exit;
}

// Ambil hasil query
$data = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

if ($data) {
    header("Content-Type: application/json");
    echo json_encode($data);
} else {
    header("Content-Type: application/json");
    echo json_encode(['error' => 'Data tidak ditemukan']);
}

// Tutup koneksi
sqlsrv_close($conn);
?>
