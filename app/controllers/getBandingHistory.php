<?php
include 'connection.php';

$id_banding = $_GET['id_banding'] ?? null;

if (!$id_banding) {
    echo json_encode(['error' => 'ID banding tidak ditemukan.']);
    exit();
}

try {
    $query = "SELECT deskripsi_banding, foto_banding FROM Banding WHERE id_banding = ?";
    $stmt = sqlsrv_query($conn, $query, [$id_banding]);

    if ($stmt === false) {
        throw new Exception(print_r(sqlsrv_errors(), true));
    }

    $result = [];
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        $result[] = [
            'deskripsi_banding' => $row['deskripsi_banding'],
            'foto_banding' => $row['foto_banding'],
        ];
    }

    echo json_encode($result);
} catch (Exception $e) {
    echo json_encode(['error' => 'Kesalahan: ' . $e->getMessage()]);
} finally {
    sqlsrv_close($conn);
}
?>
