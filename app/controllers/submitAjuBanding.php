<?php
include 'connection.php';

// Ambil data dari POST
$id_pelanggaran = $_POST['idPelanggaran'] ?? null;
$deskripsi_banding = $_POST['deskripsiBanding'] ?? null;

// Debug: Periksa apakah data diterima dengan benar
error_log("ID Pelanggaran: " . print_r($id_pelanggaran, true));  // Debugging log
error_log("Deskripsi Banding: " . print_r($deskripsi_banding, true));  // Debugging log

if (!$id_pelanggaran || !$deskripsi_banding) {
    echo json_encode(['error' => 'Data tidak lengkap.']);
    exit();
}

try {
    // Insert ke tabel Banding tanpa menyertakan id_banding
    $insertBanding = "INSERT INTO Banding (deskripsi_banding) OUTPUT INSERTED.id_banding VALUES (?)";
    $stmt = sqlsrv_query($conn, $insertBanding, [$deskripsi_banding]);

    if ($stmt === false) {
        throw new Exception(print_r(sqlsrv_errors(), true));
    }

    $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
    $id_banding = $row['id_banding'];

// Proses file gambar jika ada
$upload_dir = $_SERVER['DOCUMENT_ROOT'] . '/PBL/ajubanding/';
if (isset($_FILES['fotoBanding']) && $_FILES['fotoBanding']['error'] === UPLOAD_ERR_OK) {
    $file_name = $id_pelanggaran . '.jpg'; // Nama file berdasarkan id_pelanggaran
    $target_path = $upload_dir . $file_name;

    if (move_uploaded_file($_FILES['fotoBanding']['tmp_name'], $target_path)) {
        // Update kolom foto_banding di tabel Banding
        $update_query = "UPDATE Banding SET foto_banding = ? WHERE id_banding = ?";
        $update_params = ['/PBL/ajubanding/' . $file_name, $id_banding]; // Gunakan id_banding yang didapat dari insert
        $update_stmt = sqlsrv_query($conn, $update_query, $update_params);

        if ($update_stmt === false) {
            throw new Exception('Gagal memperbarui foto_banding: ' . print_r(sqlsrv_errors(), true));
        }
    } else {
        throw new Exception('Gagal mengupload bukti.');
    }
}

    // Update tabel Pelanggaran dengan id_banding baru
    $updatePelanggaran = "UPDATE Pelanggaran SET Bandingid_banding = ?, status = 'pending' WHERE id_pelanggaran = ?";
    $stmt = sqlsrv_query($conn, $updatePelanggaran, [$id_banding, $id_pelanggaran]);

    if ($stmt === false) {
        throw new Exception(print_r(sqlsrv_errors(), true));
    }

    echo json_encode(['success' => true]);
} catch (Exception $e) {
    echo json_encode(['error' => 'Kesalahan: ' . $e->getMessage()]);
} finally {
    sqlsrv_close($conn);
}