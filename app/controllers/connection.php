<?php
// Konfigurasi Koneksi SQL Server
<<<<<<< HEAD
$serverName = "DESKTOP-2SC3JDH"; // Sesuaikan dengan nama server Anda
=======
$serverName = "DESKTOP-HQU7BU7"; // Sesuaikan dengan nama server Anda
>>>>>>> 6e81e296d6a5ace17358e23ae716fdb64902ae1c
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