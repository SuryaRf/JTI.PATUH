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

$conn = sqlsrv_connect($serverName, $connectionOptions);

// Membuat koneksi global
?>