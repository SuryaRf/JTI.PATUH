<?php
// Get the current page's filename
$current_page = basename($_SERVER['PHP_SELF']);
?>
    <link rel="stylesheet" href="/PBL/Project%20Web/public/css/styles.css">
    <link rel="stylesheet" href="/PBL/Project%20Web/public/css/icofont.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- IcoFont CDN -->
    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icofont@1.0.0/css/icofont.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/PBL/Project%20Web/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icofont/1.0.1/css/icofont.min.css">

    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="/PBL/Project%20Web/public/css/nice-select.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="/PBL/Project%20Web/public/css/font-awesome.min.css">
    <!-- icofont CSS -->
    <link rel="stylesheet" href="/PBL/Project%20Web/public/css/icofont.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="/PBL/Project%20Web/public/css/slicknav.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="/PBL/Project%20Web/public/css/owl-carousel.css">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="/PBL/Project%20Web/public/css/datepicker.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="/PBL/Project%20Web/public/css/animate.min.css">

    <!-- Medipro CSS -->
    <link rel="stylesheet" href="/PBL/Project%20Web/public/css/normalize.css">
    <link rel="stylesheet" href="/PBL/Project%20Web/public/style.css">
    <link rel="stylesheet" href="/PBL/Project%20Web/public/css/responsive.css">
<div class="logo">
    <img src="/PBL/Project%20Web/public/svg/logo.svg" alt="Logo" class="logo-image">
</div>
<nav class="navigation">
    <ul class="nav menu">
        <li><a href="home.php" class="<?= ($current_page == 'home.php') ? 'active' : '' ?>">Beranda</a></li>
        <li><a href="/PBL/Project%20Web/app/views/global/rules.php" class="<?= ($current_page == 'rules.php') ? 'active' : '' ?>">Tata Tertib</a></li>
        <li><a href="/PBL/Project%20Web/app/views/global/about.php" class="<?= ($current_page == 'about.php') ? 'active' : '' ?>">Tentang Kami</a></li>
    </ul>
</nav>
<button onclick="window.location.href='/PBL/Project%20Web/app/views/auth/chooseRole.php'" class="login-button">Login</button>