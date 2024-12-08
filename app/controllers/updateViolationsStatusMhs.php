<?php
session_start();
include 'connection.php';

// Periksa apakah sesi NIM ada
if (!isset($_SESSION['nim'])) {
    echo json_encode(['error' => 'Anda tidak memiliki akses.']);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $id_pelanggaran = $data['id_pelanggaran'] ?? null;
    $status = $data['status'] ?? null;

    if (!$id_pelanggaran || !$status) {
        echo json_encode(['error' => 'Data tidak lengkap.']);
        exit();
    }

    try {
        // Update status pelanggaran
        $update_query = "UPDATE Pelanggaran SET status = ? WHERE id_pelanggaran = ?";
        $params = [$status, $id_pelanggaran];
        $stmt = sqlsrv_query($conn, $update_query, $params);

        if ($stmt === false) {
            throw new Exception(print_r(sqlsrv_errors(), true));
        }

        echo json_encode(['success' => true]);
    } catch (Exception $e) {
        echo json_encode(['error' => 'Kesalahan saat memperbarui status: ' . $e->getMessage()]);
    } finally {
        sqlsrv_close($conn);
    }
} else {
    echo json_encode(['error' => 'Metode pengiriman tidak valid.']);
}