<?php
session_start();
include 'connection.php';

// Periksa apakah sesi ID pegawai ada
if (!isset($_SESSION['id_pegawai'])) {
    echo json_encode(['error' => 'Anda tidak memiliki akses.']);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id_pelanggaran = $_GET['id_pelanggaran'];

    try {
        $query = "SELECT b.deskripsi_banding, b.foto_banding, m.nama_mhs, m.nim, p.lokasi, p.waktu_pelanggaran, p.status
                  FROM Pelanggaran p
                  LEFT JOIN Banding b ON p.Bandingid_banding = b.id_banding
                  LEFT JOIN Mahasiswa m ON p.nim = m.nim
                  WHERE p.id_pelanggaran = ?";
        $params = [$id_pelanggaran];
        $stmt = sqlsrv_query($conn, $query, $params);

        if ($stmt === false) {
            throw new Exception(print_r(sqlsrv_errors(), true));
        }

        $data = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

        if ($data) {
            echo json_encode(['success' => true, 'data' => $data]);
        } else {
            echo json_encode(['error' => 'Data tidak ditemukan.']);
        }
    } catch (Exception $e) {
        echo json_encode(['error' => 'Kesalahan saat mengambil data: ' . $e->getMessage()]);
    } finally {
        sqlsrv_close($conn);
    }
} else {
    echo json_encode(['error' => 'Metode permintaan tidak valid.']);
}
