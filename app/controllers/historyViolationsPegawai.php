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
        TataTertib.nama_pelanggaran,
        Pelanggaran.id_pegawai,
        Pegawai.nama_pgw AS nama_pegawai_pelapor,
        Pelanggaran.nim_pelapor,
        Pelapor.nama_mhs AS nama_pelapor,
        Pelanggaran.nim AS nim_terlapor,
        Terlapor.nama_mhs AS nama_terlapor
    FROM Pelanggaran
    LEFT JOIN Pegawai ON Pelanggaran.id_pegawai = Pegawai.id_pegawai
    LEFT JOIN Mahasiswa Pelapor ON Pelanggaran.nim_pelapor = Pelapor.nim
    LEFT JOIN Mahasiswa Terlapor ON Pelanggaran.nim = Terlapor.nim
    INNER JOIN TataTertib ON Pelanggaran.id_tatib = TataTertib.id_tatib
    ORDER BY Pelanggaran.waktu_pelanggaran DESC
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
