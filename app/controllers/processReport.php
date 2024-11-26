<?php
session_start();
include 'connection.php';

// Periksa apakah sesi ID pegawai ada
if (!isset($_SESSION['id_pegawai'])) {
    header("Location: /PBL/Project%20Web/app/views/auth/chooseRole.php");
    exit();
}

$id_pegawai = $_SESSION['id_pegawai'];

// Periksa apakah form sudah di-submit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $nim = $_POST['nim'];
    $id_tatib = $_POST['id_tatib'];
    $waktu_pelanggaran = $_POST['waktu_pelanggaran'];
    $lokasi = $_POST['lokasi'];
    $status = 'Pending'; // Status default

    // Proses file bukti
    $bukti_foto = NULL; // Default jika tidak ada bukti
    if (isset($_FILES['bukti']) && $_FILES['bukti']['error'] === UPLOAD_ERR_OK) {
        // Baca konten file sebagai binary
        $bukti_foto = file_get_contents($_FILES['bukti']['tmp_name']);
    }

    // Query untuk Insert ke tabel Pelanggaran
    $query = "INSERT INTO Pelanggaran (waktu_pelanggaran, lokasi, status, bukti_foto, nim, id_pegawai, id_tatib, Bandingid_banding) 
              VALUES (?, ?, ?, CONVERT(VARBINARY(MAX), ?), ?, ?, ?, NULL)";
    $params = [$waktu_pelanggaran, $lokasi, $status, $bukti_foto, $nim, $id_pegawai, $id_tatib];
    $stmt = sqlsrv_query($conn, $query, $params);

    if ($stmt === false) {
        // Debugging jika terjadi error
        die(json_encode(['error' => 'Kesalahan saat menyimpan data: ' . print_r(sqlsrv_errors(), true)]));
    }

    // Jika berhasil
    echo json_encode(['success' => 'Laporan berhasil dikirim.']);
    sqlsrv_close($conn);
} else {
    echo json_encode(['error' => 'Metode pengiriman tidak valid.']);
}
?>
