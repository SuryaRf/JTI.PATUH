<?php
include 'connection.php';
require '../../vendor/autoload.php'; // Library harus diinstal
use PHPMailer\PHPMailer\PHPMailer;

header("Content-Type: application/json");

// Nonaktifkan error HTML bawaan
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING); 
ini_set('display_errors', 0);

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo json_encode(['error' => 'ID tidak valid atau tidak disertakan.']);
    exit();
}

$id_pelanggaran = (int)$_GET['id'];

// Ambil data pelanggaran
$query = "
    SELECT 
        p.id_pelanggaran, 
        p.waktu_pelanggaran, 
        p.lokasi, 
        p.status, 
        t.nama_pelanggaran, 
        t.tingkat_pelanggaran, 
        terlapor.nama_mhs AS nama_terlapor, 
        terlapor.nim AS nim_terlapor
    FROM Pelanggaran p
    LEFT JOIN Mahasiswa terlapor ON p.nim = terlapor.nim
    JOIN TataTertib t ON p.id_tatib = t.id_tatib
    WHERE p.id_pelanggaran = ?";
$params = [$id_pelanggaran];
$stmt = sqlsrv_query($conn, $query, $params);

if ($stmt === false) {
    echo json_encode(['error' => 'Error saat mengambil data: ' . print_r(sqlsrv_errors(), true)]);
    exit();
}

$data = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
if (!$data) {
    echo json_encode(['error' => 'Data tidak ditemukan.']);
    exit();
}

// Direktori upload file PDF
$upload_dir = $_SERVER['DOCUMENT_ROOT'] . '/PBL/pdf/';
if (!is_dir($upload_dir)) {
    if (!mkdir($upload_dir, 0755, true)) {
        echo json_encode(['error' => 'Gagal membuat direktori tujuan.']);
        exit();
    }
}

// Buat file PDF
require '../../vendor/setasign/fpdf/fpdf.php'; // Pastikan library FPDF sudah diinstal
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(190, 10, 'Surat Pelanggaran', 0, 1, 'C');

$pdf->SetFont('Arial', '', 12);
$pdf->Ln(10);
$pdf->Cell(50, 10, 'Nama Terlapor:', 0, 0);
$pdf->Cell(50, 10, $data['nama_terlapor'], 0, 1);
$pdf->Cell(50, 10, 'NIM Terlapor:', 0, 0);
$pdf->Cell(50, 10, $data['nim_terlapor'], 0, 1);
$pdf->Cell(50, 10, 'Nama Pelanggaran:', 0, 0);
$pdf->Cell(50, 10, $data['nama_pelanggaran'], 0, 1);

// Nama file PDF
$filename = $upload_dir . 'surat_pelanggaran_' . $data['id_pelanggaran'] . '.pdf';
$pdf->Output('F', $filename);

// Simpan ke database
$relative_path = '/PBL/pdf/surat_pelanggaran_' . $data['id_pelanggaran'] . '.pdf';
$updateQuery = "UPDATE Pelanggaran SET pdf_surat = ? WHERE id_pelanggaran = ?";
$updateParams = [$relative_path, $id_pelanggaran];
if (!sqlsrv_query($conn, $updateQuery, $updateParams)) {
    echo json_encode(['error' => 'Gagal memperbarui database: ' . print_r(sqlsrv_errors(), true)]);
    exit();
}

// Kirim notifikasi
$isi_notifikasi = "Surat pelanggaran telah dikirim. Klik untuk melihat detail.";
$insertNotificationQuery = "INSERT INTO Notifikasi (nim, isi, pdf_url) VALUES (?, ?, ?)";
$insertNotificationParams = [$data['nim_terlapor'], $isi_notifikasi, $relative_path];
if (!sqlsrv_query($conn, $insertNotificationQuery, $insertNotificationParams)) {
    echo json_encode(['error' => 'Gagal menyimpan notifikasi: ' . print_r(sqlsrv_errors(), true)]);
    exit();
}

// Kirim email menggunakan PHPMailer
$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com'; // Ganti dengan host SMTP Anda
$mail->SMTPAuth = true;
$mail->Username = 'your_email@gmail.com'; // Email pengirim
$mail->Password = 'your_password'; // Password email pengirim
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->setFrom('no-reply@yourdomain.com', 'Sistem Pelanggaran');
$mail->addAddress($data['nim_terlapor'] . '@student.yourdomain.com');
$mail->Subject = 'Surat Pelanggaran';
$mail->Body = 'Berikut adalah surat pelanggaran Anda.';
$mail->addAttachment($filename);

if (!$mail->send()) {
    echo json_encode(['error' => 'Gagal mengirim email: ' . $mail->ErrorInfo]);
    exit();
}

sqlsrv_close($conn);
echo json_encode(['success' => true]);
?>
