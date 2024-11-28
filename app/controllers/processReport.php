<?php
session_start();
include 'connection.php';

// Periksa apakah sesi ID pegawai ada
if (!isset($_SESSION['id_pegawai'])) {
    header("Location: /PBL/Project%20Web/app/views/auth/chooseRole.php");
    exit();
}

$id_pegawai = $_SESSION['id_pegawai'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nim = $_POST['nim'];
    $id_tatib = $_POST['id_tatib'];
    $waktu_pelanggaran = $_POST['waktu_pelanggaran'];
    $lokasi = $_POST['lokasi'];
    $status = 'Pending';

    // Insert pelanggaran tanpa gambar untuk mendapatkan id_pelanggaran
    $query = "INSERT INTO Pelanggaran (waktu_pelanggaran, lokasi, status, nim, id_pegawai, id_tatib, Bandingid_banding)
              OUTPUT INSERTED.id_pelanggaran 
              VALUES (?, ?, ?, ?, ?, ?, NULL)";
    $params = [$waktu_pelanggaran, $lokasi, $status, $nim, $id_pegawai, $id_tatib];
    $stmt = sqlsrv_query($conn, $query, $params);

    if ($stmt === false) {
        die(json_encode(['error' => 'Kesalahan saat menyimpan data: ' . print_r(sqlsrv_errors(), true)]));
    }

    $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
    $id_pelanggaran = $row['id_pelanggaran'];

    // Proses file gambar jika ada
    $upload_dir = $_SERVER['DOCUMENT_ROOT'] . '/PBL/image/';
    if (isset($_FILES['bukti']) && $_FILES['bukti']['error'] === UPLOAD_ERR_OK) {
        $file_name = $id_pelanggaran . '.jpg'; // Nama file berdasarkan id_pelanggaran
        $target_path = $upload_dir . $file_name;

        if (move_uploaded_file($_FILES['bukti']['tmp_name'], $target_path)) {
            // Update kolom bukti_foto di database
            $update_query = "UPDATE Pelanggaran SET bukti_foto = ? WHERE id_pelanggaran = ?";
            $update_params = ['/PBL/image/' . $file_name, $id_pelanggaran];
            sqlsrv_query($conn, $update_query, $update_params);
        }
    }

    // Tambahkan notifikasi
    $notifikasi_mahasiswa = "Terdapat laporan pelanggaran untuk Anda dengan waktu $waktu_pelanggaran di lokasi $lokasi sedang diproses dengan status $status.";
    $notifikasi_admin = "Anda telah mengajukan laporan pelanggaran atas mahasiswa dengan NIM $nim.";

    $query_mahasiswa = "INSERT INTO Notifikasi (nim, isi) VALUES (?, ?)";
    $params_mahasiswa = [$nim, $notifikasi_mahasiswa];
    sqlsrv_query($conn, $query_mahasiswa, $params_mahasiswa);

    $query_admin = "INSERT INTO Notifikasi (id_pegawai, isi) VALUES (?, ?)";
    $params_admin = [$id_pegawai, $notifikasi_admin];
    sqlsrv_query($conn, $query_admin, $params_admin);

    echo json_encode(['success' => 'Laporan berhasil dikirim.']);
    sqlsrv_close($conn);
} else {
    echo json_encode(['error' => 'Metode pengiriman tidak valid.']);
}
?>
