<?php
include 'connection.php';

header("Content-Type: application/json");

// Debug: Error handling untuk koneksi
if (!$conn) {
    echo json_encode(['error' => 'Koneksi ke database gagal.']);
    exit;
}

// Query untuk mengambil data
$query = "SELECT id_tatib, nama_pelanggaran, tingkat_pelanggaran, keterangan_sanksi FROM TataTertib";
$stmt = sqlsrv_query($conn, $query);

if ($stmt === false) {
    echo json_encode(['error' => 'Kesalahan query: ' . print_r(sqlsrv_errors(), true)]);
    exit;
}

$tataTertibData = [];
while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    $tataTertibData[] = $row;
}

// Pastikan output JSON valid
echo json_encode($tataTertibData);
sqlsrv_close($conn);
?>
