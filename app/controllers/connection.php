<?php
// Konfigurasi Koneksi SQL Server
<<<<<<< HEAD
$serverName = "DESKTOP-HQU7BU7"; // Sesuaikan dengan nama server Anda
=======
$serverName = "DEKU"; // Sesuaikan dengan nama server Anda
>>>>>>> 4004717a461069fab1ce7b62ce4d1822bfc1ea2d
$database = "PBL";    // Nama database

// Opsi koneksi
$connectionOptions = [
    "Database" => $database,
    "Uid" => "",       // Username SQL Server (kosongkan jika Windows Authentication)
    "PWD" => "",       // Password SQL Server (kosongkan jika Windows Authentication)
];

$conn = sqlsrv_connect($serverName, $connectionOptions);

?>