<?php
include 'connection.php';

header("Content-Type: application/json");

// Check for POST data
$data = json_decode(file_get_contents("php://input"), true);

if (!$data || !isset($data['id']) || !isset($data['nama']) || !isset($data['tingkat']) || !isset($data['sanksi'])) {
    echo json_encode(['error' => 'Invalid input.']);
    exit;
}

$id = $data['id'];
$nama = $data['nama'];
$tingkat = $data['tingkat'];
$sanksi = $data['sanksi'];

// Query update
$query = "UPDATE TataTertib SET nama_pelanggaran = ?, tingkat_pelanggaran = ?, keterangan_sanksi = ? WHERE id_tatib = ?";
$params = [$nama, $tingkat, $sanksi, $id];
$stmt = sqlsrv_query($conn, $query, $params);

if ($stmt === false) {
    echo json_encode(['error' => 'Kesalahan saat mengupdate data: ' . print_r(sqlsrv_errors(), true)]);
    exit;
}

echo json_encode(['message' => 'Data berhasil diupdate!']);
sqlsrv_close($conn);
?>
