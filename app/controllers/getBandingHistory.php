<?php
session_start();
include 'connection.php';

if (!isset($_SESSION['nim'])) {
    echo json_encode(['error' => 'Anda tidak memiliki akses.']);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id_pelanggaran = $_GET['id'] ?? null;

    if (!$id_pelanggaran) {
        echo json_encode(['error' => 'ID pelanggaran tidak ditemukan.']);
        exit();
    }

    try {
        $query = "SELECT * FROM Banding WHERE id_pelanggaran = ?";
        $stmt = sqlsrv_query($conn, $query, [$id_pelanggaran]);

        $riwayat = [];
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            $riwayat[] = $row;
        }

        echo json_encode($riwayat);
    } catch (Exception $e) {
        echo json_encode(['error' => 'Kesalahan saat mengambil riwayat: ' . $e->getMessage()]);
    } finally {
        sqlsrv_close($conn);
    }
} else {
    echo json_encode(['error' => 'Metode pengiriman tidak valid.']);
}