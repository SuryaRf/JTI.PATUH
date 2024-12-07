<?php
include 'connection.php';
header("Content-Type: application/json");

session_start();

try {
    if (!isset($_SESSION['nim'])) {
        echo json_encode(['error' => 'ID Pegawai tidak ditemukan dalam sesi.']);
        exit();
    }

    $nim = $_SESSION['nim']; // ID Pegawai dari sesi

    // Ambil data dari request JSON
    $rawInput = file_get_contents("php://input");
    $data = json_decode($rawInput, true);

    if (!$data) {
        echo json_encode([
            'error' => 'Request JSON tidak valid.',
            'raw_input' => $rawInput,
        ]);
        exit();
    }

    if (!isset($data['nim'], $data['email'], $data['gender'], $data['phone'])) {
        echo json_encode([
            'error' => 'Data tidak lengkap.',
            'received_data' => $data,
        ]);
        exit();
    }

    // Update data di database
    $query = "
        UPDATE Pegawai
        SET nip = ?, email = ?, jk_pegawai = ?, nohp_pgw = ?
        WHERE nim = ?
    ";
    $params = [
        $data['nip'],
        $data['email'],
        $data['gender'],
        $data['phone'],
        $nim,
    ];
    $stmt = sqlsrv_query($conn, $query, $params);

    if ($stmt === false) {
        echo json_encode([
            'error' => 'Kesalahan saat memperbarui data.',
            'sqlsrv_errors' => sqlsrv_errors(),
        ]);
        exit();
    }

    echo json_encode(['success' => true]);
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
} finally {
    if (isset($conn)) {
        sqlsrv_close($conn);
    }
}
?>
