<?php
session_start();
include 'connection.php';

// Cek apakah sudah login sebelumnya, jika ya, arahkan langsung ke dashboard
if (isset($_SESSION['nim']) || isset($_SESSION['id_pegawai'])) {
    // Jika sudah login, arahkan langsung ke halaman dashboard
    switch ($_SESSION['role']) {
        case 'admin':
            header("Location: ../views/dashboard/dashboardAdmin/pages/dashboard.php");
            break;
        case 'mahasiswa':
            header("Location: ../views/dashboard/dashboardMhs/pages/dashboard.php");
            break;
        case 'dosen':
            header("Location: ../views/dashboard/dashboardDosen/pages/dashboard.php");
            break;
        default:
            header("Location: ../views/auth/chooseRole.php");
            break;
    }
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Query untuk memeriksa username dan password
    $sql = "SELECT nim, role, id_pegawai, username, password FROM [dbo].[Login] WHERE username = ?";
    $params = array($username);
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt === false) {
        die("Kesalahan saat menjalankan query: " . print_r(sqlsrv_errors(), true));
    }

    // Memeriksa apakah ada hasil
    if ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        if ($password == $row['password']) { // Gunakan hash_password di real project!
            // Sesi login berhasil
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['role'];

            // Simpan NIM atau ID Pegawai berdasarkan role
            if ($row['role'] == 'mahasiswa') {
                $_SESSION['nim'] = $row['nim'];
            } elseif ($row['role'] == 'admin') {
                $_SESSION['id_pegawai'] = $row['id_pegawai'];
            }elseif ($row['role'] == 'dosen') {
                $_SESSION['id_pegawai'] = $row['id_pegawai'];
            }

            // Pengalihan berdasarkan status
            switch ($row['role']) {
                case 'admin':
                    header("Location: ../views/dashboard/dashboardAdmin/pages/dashboard.php");
                    break;
                case 'mahasiswa':
                    header("Location: ../views/dashboard/dashboardMhs/pages/dashboard.php");
                    break;
                case 'dosen':
                    header("Location: ../views/dashboard/dashboardDosen/pages/dashboard.php");
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
