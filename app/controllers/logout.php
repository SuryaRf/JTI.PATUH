<?php
// Mulai sesi
session_start();

// Hapus semua data sesi
session_unset();
session_destroy();

// Arahkan ke halaman login
header("Location: /PBL/Project%20Web/app/views/auth/chooseRole.php");
exit();
?>
