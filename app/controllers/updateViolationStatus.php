<?php
include 'connection.php';
header("Content-Type: application/json");

// Membaca data POST yang dikirim
$inputData = json_decode(file_get_contents("php://input"), true);

if (!isset($inputData['id_pelanggaran']) || !is_numeric($inputData['id_pelanggaran']) || !isset($inputData['status'])) {
    echo json_encode(['error' => 'Data tidak valid.']);
    exit();
}

$id_pelanggaran = (int)$inputData['id_pelanggaran'];
$status = $inputData['status']; // valid / reject

// Periksa apakah status yang diterima valid
if ($status !== 'valid' && $status !== 'reject') {
    echo json_encode(['error' => 'Status tidak valid.']);
    exit();
}

// Query untuk memperbarui status pelanggaran
$query = "UPDATE Pelanggaran SET status = ? WHERE id_pelanggaran = ?";
$params = [$status, $id_pelanggaran];
$stmt = sqlsrv_query($conn, $query, $params);

if ($stmt === false) {
    echo json_encode(['error' => 'Kesalahan query: ' . print_r(sqlsrv_errors(), true)]);
    exit();
}

echo json_encode(['success' => true]);

sqlsrv_close($conn);
?>
