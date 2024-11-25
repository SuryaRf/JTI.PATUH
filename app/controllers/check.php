<?php
session_start();
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET") {
    // Query untuk mengambil semua data dari tabel Login
    $sql = "SELECT * FROM Login";
    
    // Menjalankan query
    $stmt = sqlsrv_query($conn, $sql);

    if ($stmt === false) {
        die("Kesalahan saat menjalankan query: " . print_r(sqlsrv_errors(), true));
    }

    // Menyimpan semua hasil query
    $result = [];
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        $result[] = $row;
    }

    // Menampilkan hasil dalam format JSON
    header("Content-Type: application/json");
    echo json_encode($result);

    // Menutup statement
    sqlsrv_free_stmt($stmt);
} else {
    echo "Gunakan metode GET atau POST untuk mengakses data.";
}
