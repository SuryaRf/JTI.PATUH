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

// Judul Surat
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(190, 10, 'Surat Pemanggilan Pelanggaran', 0, 1, 'C');

// Tambahkan nomor surat
$pdf->SetFont('Arial', '', 12);
$pdf->Ln(5);
$pdf->Cell(190, 10, 'Nomor Surat: 123/SP/2024', 0, 1, 'C'); // Nomor surat bebas

// Informasi pelanggaran
$pdf->Ln(10);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(50, 10, 'Nama Terlapor:', 0, 0);
$pdf->Cell(50, 10, $data['nama_terlapor'], 0, 1);
$pdf->Cell(50, 10, 'NIM Terlapor:', 0, 0);
$pdf->Cell(50, 10, $data['nim_terlapor'], 0, 1);
$pdf->Cell(50, 10, 'Nama Pelanggaran:', 0, 0);
$pdf->Cell(50, 10, $data['nama_pelanggaran'], 0, 1);
$pdf->Cell(50, 10, 'Waktu Pelanggaran:', 0, 0);
$pdf->Cell(50, 10, $data['waktu_pelanggaran']->format('Y-m-d H:i:s'), 0, 1);
$pdf->Cell(50, 10, 'Lokasi Pelanggaran:', 0, 0);
$pdf->Cell(50, 10, $data['lokasi'], 0, 1);

// Tambahkan jarak sebelum footer
$pdf->Ln(10);

// Footer
$pdf->SetFont('Arial', '', 12);
$pdf->MultiCell(0, 10, "Dengan surat ini, kami memanggil Saudara/i " . $data['nama_terlapor'] . 
    " (NIM: " . $data['nim_terlapor'] . ") untuk segera menghadiri pertemuan di ruang admin guna membahas pelanggaran yang telah dilakukan. Harap hadir pada jam kerja kantor dan membawa dokumen terkait jika ada. Terima kasih.");

$pdf->Ln(20); // Tambahkan jarak sebelum tanda tangan

// Tanda Tangan
$pdf->Cell(130); // Geser posisi ke kanan
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(60, 10, 'Malang, ' . date('d F Y'), 0, 1, 'C'); // Tanggal dinamis
$pdf->Cell(130);
$pdf->Cell(60, 10, 'Admin Jurusan', 0, 1, 'C'); // Jabatan tanda tangan

$pdf->Ln(20); // Tambahkan jarak sebelum nama terang
$pdf->Cell(130);
$pdf->Cell(60, 10, '__________________________', 0, 1, 'C'); // Garis untuk tanda tangan
$pdf->Cell(130);
$pdf->Cell(60, 10, '(Nama Admin)', 0, 1, 'C'); // Nama terang admin

// Simpan PDF ke file
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
