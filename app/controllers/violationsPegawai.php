<?php
session_start();
include 'connection.php';

if (!isset($_SESSION['id_pegawai'])) {
    die(json_encode(['error' => 'id_pegawai tidak ditemukan dalam sesi']));
}

$id_pegawai = $_SESSION['id_pegawai'];

// Query untuk mengambil data pelanggaran beserta nama pelanggaran dari TataTertib
$query = "
	    SELECT 
        Pelanggaran.id_pelanggaran,
        Pelanggaran.waktu_pelanggaran,
        Pelanggaran.lokasi,
        Pelanggaran.status,
        TataTertib.nama_pelanggaran
    FROM Pelanggaran
    INNER JOIN TataTertib ON Pelanggaran.id_tatib = TataTertib.id_tatib
    WHERE Pelanggaran.id_pegawai = ? AND Pelanggaran.status = 'Pending'
";
$params = array($id_pegawai);
$stmt = sqlsrv_query($conn, $query, $params);

if ($stmt === false) {
    die(json_encode(['error' => 'Kesalahan query: ' . print_r(sqlsrv_errors(), true)]));
}

$violations = array();
while ($data = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    $violations[] = $data;
}

header("Content-Type: application/json");
echo json_encode($violations);

sqlsrv_close($conn);
?>
