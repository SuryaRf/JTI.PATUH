<?php
include 'connection.php'; // File koneksi database
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['error' => 'Hanya metode POST yang didukung.']);
    exit();
}

// Validasi input ID Pelanggaran
if (!isset($_POST['id_pelanggaran']) || !is_numeric($_POST['id_pelanggaran'])) {
    echo json_encode(['error' => 'ID Pelanggaran tidak valid.']);
    exit();
}

$id_pelanggaran = (int)$_POST['id_pelanggaran'];
$updateFields = [];
$params = [];

// Ambil data lama untuk perbandingan
$queryGet = "SELECT * FROM Pelanggaran WHERE id_pelanggaran = ?";
$stmtGet = sqlsrv_query($conn, $queryGet, [$id_pelanggaran]);

if ($stmtGet === false || !($row = sqlsrv_fetch_array($stmtGet, SQLSRV_FETCH_ASSOC))) {
    echo json_encode(['error' => 'ID Pelanggaran tidak ditemukan.']);
    exit();
}

// Proses data yang akan diupdate
if (isset($_POST['nama_mhs'])) {
    $updateFields[] = "nama_mhs = ?";
    $params[] = $_POST['nama_mhs'];
}

if (isset($_POST['nim'])) {
    $updateFields[] = "nim = ?";
    $params[] = $_POST['nim'];
}

if (isset($_POST['nama_pelanggaran'])) {
    $updateFields[] = "nama_pelanggaran = ?";
    $params[] = $_POST['nama_pelanggaran'];
}

if (isset($_POST['tingkat_pelanggaran'])) {
    $updateFields[] = "tingkat_pelanggaran = ?";
    $params[] = $_POST['tingkat_pelanggaran'];
}

if (isset($_POST['waktu_pelanggaran']) && $_POST['waktu_pelanggaran'] !== '') {
    $datetime = DateTime::createFromFormat('Y-m-d H:i:s', $_POST['waktu_pelanggaran']);
    if ($datetime) {
        $updateFields[] = "waktu_pelanggaran = ?";
        $params[] = $datetime->format('Y-m-d H:i:s');
    } else {
        echo json_encode(['error' => 'Format waktu pelanggaran tidak valid.']);
        exit();
    }
}


if (isset($_POST['lokasi']) && $_POST['lokasi'] !== '') {
    $updateFields[] = "lokasi = ?";
    $params[] = $_POST['lokasi'];
}


// Proses file upload jika ada
if (isset($_FILES['bukti_foto']) && $_FILES['bukti_foto']['error'] == UPLOAD_ERR_OK) {
    $uploadDir = 'uploads/'; // Direktori penyimpanan file
    $bukti_foto = basename($_FILES['bukti_foto']['name']);
    $uploadFile = $uploadDir . $bukti_foto;

    if (move_uploaded_file($_FILES['bukti_foto']['tmp_name'], $uploadFile)) {
        $updateFields[] = "bukti_foto = ?";
        $params[] = $uploadFile;
    } else {
        echo json_encode(['error' => 'Gagal mengupload bukti foto.']);
        exit();
    }
}

// Pastikan setidaknya ada satu field untuk diupdate
if (empty($updateFields)) {
    echo json_encode(['error' => 'Tidak ada atribut yang dikirim untuk diupdate.']);
    exit();
}

// Query untuk update data
$query = "UPDATE Pelanggaran SET " . implode(", ", $updateFields) . " WHERE id_pelanggaran = ?";
$params[] = $id_pelanggaran;

$stmt = sqlsrv_query($conn, $query, $params);

if ($stmt === false) {
    echo json_encode(['error' => 'Gagal memperbarui data: ' . print_r(sqlsrv_errors(), true)]);
    exit();
}

// Mengirimkan respons sukses
echo json_encode(['success' => 'Data pelanggaran berhasil diperbarui.']);
sqlsrv_close($conn);
?>
