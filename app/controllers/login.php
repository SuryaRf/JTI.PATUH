<?php
session_start();
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);


    // Query untuk memeriksa username dan password
    $sql = "SELECT role, username, password FROM [dbo].[Login] WHERE username = ?";
    $params = array($username);
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt === false) {
        die("Kesalahan saat menjalankan query: " . print_r(sqlsrv_errors(), true));
    }

    // Memeriksa apakah ada hasil
    if ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        if ($password == $row['password']) {
            // Sesi login berhasil
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['role'];

            // Pengalihan berdasarkan status
            switch ($row['role']) {
                case 'admin':
                    header("Location: ../views/dashboard/dashboardAdmin/pages/dashboard.php");
                    break;
                case 'mahasiswa':
                    header("Location: ../views/dashboard/dashboardMhs/pages/dashboard.php");
                    break;
                case 'adminPerpus':
                    header("Location: AdminPerpus/home.html");
                    break;
                case 'mahasiswa':
                    header("Location: Mahasiswa/home.html");
                    break;
                default:
                    echo "Status tidak dikenal.";
                    break;
            }
            exit;
        } else {
            header("Location: ../views/auth/loginAdmin.php?error=wrong_password");
            exit;
        }
    } else {
        header("Location: ../views/auth/loginAdmin.php?error=user_not_found");
        exit;
    }

    // Menutup statement
    sqlsrv_free_stmt($stmt);
}
?>
