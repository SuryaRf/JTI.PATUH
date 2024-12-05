<?php
session_start();
include 'connection.php';
require '../../vendor/autoload.php'; // Ensure the library is correctly installed

if (!isset($_SESSION['id_pegawai'])) {
    header("Content-Type: application/json");
    echo json_encode(['error' => 'id_pegawai tidak ditemukan dalam sesi']);
    exit;
}

$id_pegawai = $_SESSION['id_pegawai'];

// Fetch data for the report
$query = "
    SELECT
        Pelanggaran.id_pelanggaran,
        Pelanggaran.waktu_pelanggaran,
        TataTertib.nama_pelanggaran,
        Pelanggaran.status,
        Terlapor.nama_mhs AS nama_terlapor
    FROM Pelanggaran
    LEFT JOIN Mahasiswa Terlapor ON Pelanggaran.nim = Terlapor.nim
    INNER JOIN TataTertib ON Pelanggaran.id_tatib = TataTertib.id_tatib
    ORDER BY Pelanggaran.waktu_pelanggaran DESC
";
$params = array($id_pegawai);
$stmt = sqlsrv_query($conn, $query, $params);

if ($stmt === false) {
    header("Content-Type: application/json");
    echo json_encode(['error' => 'Kesalahan query: ' . print_r(sqlsrv_errors(), true)]);
    exit;
}

// Initialize FPDF
$pdf = new FPDF();
$pdf->SetTitle('Laporan Riwayat Pelanggaran');

// Add a page
$pdf->AddPage();

// Set font for the title
$pdf->SetFont('Arial', 'B', 16);

// Add the main title
$pdf->Cell(0, 10, 'DATA LAPORAN PELANGGARAN', 0, 1, 'C');

// Set font for the subtitle
$pdf->SetFont('Arial', '', 12);

// Add the subtitle
$pdf->Cell(0, 10, 'Bulan November - Desember 2024', 0, 1, 'C');

// Add some space before the table
$pdf->Ln(10);

// Set font for header
$pdf->SetFont('Arial', 'B', 10);

// Set column widths
$columnWidths = [20, 40, 50, 40, 30];

// Table header
$pdf->Cell($columnWidths[0], 10, 'ID', 1, 0, 'C');
$pdf->Cell($columnWidths[1], 10, 'Mahasiswa Terlapor', 1, 0, 'C');
$pdf->Cell($columnWidths[2], 10, 'Nama Pelanggaran', 1, 0, 'C');
$pdf->Cell($columnWidths[3], 10, 'Waktu', 1, 0, 'C');
$pdf->Cell($columnWidths[4], 10, 'Status', 1, 1, 'C');

// Reset font for body
$pdf->SetFont('Arial', '', 7);

// Row height
$rowHeight = 10;

// Check if the data fits within the current page
while ($data = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    // Check for page break (assuming the bottom margin of the page is 10mm)
    if ($pdf->GetY() + $rowHeight > 270) { // 270 is near the bottom of the page
        $pdf->AddPage();
    }

    // Batasi "Nama Pelanggaran" menjadi maksimal 4 kata
    $namaPelanggaran = $data['nama_pelanggaran'];
    $words = explode(' ', $namaPelanggaran); // Pecah menjadi array kata
    $limitedWords = array_slice($words, 0, 4); // Ambil maksimal 4 kata
    $shortenedNamaPelanggaran = implode(' ', $limitedWords) . '...'; // Gabungkan kembali

    // Write each row to the table
    $pdf->Cell($columnWidths[0], $rowHeight, $data['id_pelanggaran'], 1, 0, 'C');
    $pdf->Cell($columnWidths[1], $rowHeight, $data['nama_terlapor'], 1, 0, 'C');
    $pdf->Cell($columnWidths[2], $rowHeight, $shortenedNamaPelanggaran, 1, 0, 'C'); // Gunakan nama yang sudah dibatasi
    $pdf->Cell($columnWidths[3], $rowHeight, $data['waktu_pelanggaran']->format('Y-m-d H:i:s'), 1, 0, 'C');
    $pdf->Cell($columnWidths[4], $rowHeight, ucfirst($data['status']), 1, 1, 'C');
}

// Output the PDF document
$pdf->Output('D', 'laporan_pelanggaran.pdf'); // 'D' for download

sqlsrv_close($conn);

?>
