<?php
include 'connection.php';

header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);

if (!$conn) {
    echo json_encode(['error' => 'Koneksi ke database gagal.']);
    exit;
}

$tingkat = $data['tingkat'];
$keterangan = $data['sanksi'];

$query = "
    UPDATE Sanksi 
    SET keterangan_sanksi = ? 
    WHERE tingkat_pelanggaran = ?
";
$params = [$keterangan, $tingkat];
$stmt = sqlsrv_query($conn, $query, $params);

if ($stmt === false) {
    echo json_encode(['error' => 'Kesalahan saat mengupdate data: ' . print_r(sqlsrv_errors(), true)]);
    exit;
}

echo json_encode(['message' => 'Keterangan sanksi berhasil diperbarui.']);
sqlsrv_close($conn);
?>
