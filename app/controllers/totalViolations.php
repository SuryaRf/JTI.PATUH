<?php
// Konfigurasi Koneksi SQL Server
$serverName = "DESKTOP-VDHPPPR\SQLEXPRESS"; // Sesuaikan dengan nama server Anda
$database = "PBL";    // Nama database

// Opsi koneksi
$connectionOptions = [
    "Database" => $database,
    "Uid" => "",       // Username SQL Server (kosongkan jika Windows Authentication)
    "PWD" => "",       // Password SQL Server (kosongkan jika Windows Authentication)
];

// Membuat koneksi ke SQL Server
$conn = sqlsrv_connect($serverName, $connectionOptions);

// Cek apakah koneksi berhasil
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true)); // Menampilkan error jika koneksi gagal
}

// Query yang akan dijalankan
$query = "
    SELECT 
        COUNT(*) AS total_laporan,
        SUM(CASE WHEN status = 'valid' THEN 1 ELSE 0 END) AS laporan_selesai,
        SUM(CASE WHEN status = 'Pending' THEN 1 ELSE 0 END) AS laporan_tertunda
    FROM Pelanggaran p
    JOIN Mahasiswa m ON p.Mahasiswanim = m.nim
    WHERE m.nim = '2341760020'; 
";

// Menjalankan query
$result = sqlsrv_query($conn, $query);

// Cek apakah query berhasil
if ($result === false) {
    die(print_r(sqlsrv_errors(), true)); // Menampilkan error jika query gagal
}

// Mengambil hasil query
$data = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);

// Menampilkan hasil dalam format JSON
echo json_encode($data);

// Menutup koneksi
sqlsrv_close($conn);
?>
