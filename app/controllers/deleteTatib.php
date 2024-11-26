<?php
include 'connection.php';

header("Content-Type: application/json");

// Check for POST data
$data = json_decode(file_get_contents("php://input"), true);

if (!$data || !isset($data['id'])) {
    echo json_encode(['error' => 'Invalid input.']);
    exit;
}

$id = $data['id'];

// Query delete
$query = "DELETE FROM TataTertib WHERE id_tatib = ?";
$params = [$id];
$stmt = sqlsrv_query($conn, $query, $params);

if ($stmt === false) {
    echo json_encode(['error' => 'Kesalahan saat menghapus data: ' . print_r(sqlsrv_errors(), true)]);
    exit;
}

echo json_encode(['message' => 'Data berhasil dihapus!']);
sqlsrv_close($conn);
?>
