<?php
include 'connection.php';

if (!isset($_GET['id_pelanggaran'])) {
    echo json_encode(['error' => 'ID pelanggaran tidak ditemukan.']);
    exit();
}

$id_pelanggaran = $_GET['id_pelanggaran'];

try {
    $query = "
        SELECT b.deskripsi_banding
        FROM Pelanggaran p
        JOIN Banding b ON p.Bandingid_banding = b.id_banding
        WHERE p.id_pelanggaran = ?";
    $params = [$id_pelanggaran];
    $stmt = sqlsrv_query($conn, $query, $params);

    if ($stmt === false) {
        throw new Exception(print_r(sqlsrv_errors(), true));
    }

    $riwayat = [];
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        $riwayat[] = $row;
    }

    echo json_encode(['riwayat' => $riwayat]);

} catch (Exception $e) {
    echo json_encode(['error' => 'Kesalahan saat mengambil data: ' . $e->getMessage()]);
} finally {
    sqlsrv_close($conn);
}
