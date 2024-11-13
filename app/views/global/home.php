<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JTI.Patuh</title>
    <link rel="stylesheet" href="/PBL/Project%20Web/public/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/PBL/Project%20Web/public/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="/PBL/Project%20Web/public/css/font-awesome.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="/PBL/Project%20Web/public/css/animate.min.css">

    <!-- Medipro CSS -->
    <link rel="stylesheet" href="/PBL/Project%20Web/public/css/normalize.css">
    <link rel="stylesheet" href="/PBL/Project%20Web/public/style.css">
    <link rel="stylesheet" href="/PBL/Project%20Web/public/css/responsive.css">
</head>

<body>
<div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator"> 
                    <svg width="16px" height="12px">
                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>

    <!-- Navbar -->
    <header class="header">
        <?php include 'header.php'; ?>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="title-description-container">
            <h1 class="main-title">SELAMAT DATANG DI<br>JTI.PATUH</h1>
            <p class="description">
                <span class="highlight">JTI.Patuh</span> adalah sistem yang dirancang untuk mendukung kepatuhan terhadap tata tertib di Jurusan Teknologi Informasi. Bersama-sama, kita ciptakan lingkungan belajar yang aman, produktif, dan kondusif.
            </p>

            <!-- Report Button -->
            <div class="report-button-container">
                <button onclick="window.location.href='/PBL/Project%20Web/app/views/auth/choose_role.php'" class="report-button">laporkan</button>
            </div>
        </div>

        <!-- Icon to the right of title-description -->
        <div class="icon-container">
            <img src="/PBL/Project%20Web/public/svg/icon_paper.svg" alt="Icon" class="icon-image">
        </div>
    </main>

    <!-- Start Feautes -->
    <section class="Features section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Ketahui Tingkatan Pelanggaran di Tata Tertib</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet.</p>
                    </div>
                </div>
                <!-- Feature 1 -->
                <div class="col-2 d-flex justify-content-center">
                    <div class="single-features text-center">
                        <div class="roman-icon">I</div>
                        <h5>Pelanggaran<br>Sangat Berat</h5>

                    </div>
                </div>
                <!-- Feature 2 -->
                <div class="col-2 d-flex justify-content-center">
                    <div class="single-features text-center">
                        <div class="roman-icon">II</div>
                        <h5>Pelanggaran<br>Berat</h5>

                    </div>
                </div>
                <!-- Feature 3 -->
                <div class="col-2 d-flex justify-content-center">
                    <div class="single-features text-center">
                        <div class="roman-icon">III</div>
                        <h5>Pelanggaran<br>Cukup Berat</h5>

                    </div>
                </div>
                <!-- Feature 4 -->
                <div class="col-2 d-flex justify-content-center">
                    <div class="single-features text-center">
                        <div class="roman-icon">IV</div>
                        <h5>Pelanggaran<br>Sedang</h5>

                    </div>
                </div>
                <!-- Feature 5 -->
                <div class="col-2 d-flex justify-content-center">
                    <div class="single-features text-center">
                        <div class="roman-icon">V</div>
                        <h5>Pelanggaran<br>Ringan</h5>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--/ End Feautes -->


    <!-- Footer -->
    <footer class="footer">
        Kami Membantu Anda Menjadi Bagian dari Kampus yang Tertib dan Teratur
    </footer>

    <!-- JavaScript -->
    <!-- jquery Min JS -->
    <script src="/PBL/Project%20Web/public/js/jquery.min.js"></script>
    <!-- jquery Migrate JS -->
    <script src="/PBL/Project%20Web/public/js/jquery-migrate-3.0.0.js"></script>
    <!-- jquery Ui JS -->
    <script src="/PBL/Project%20Web/public/js/jquery-ui.min.js"></script>
    <!-- Easing JS -->
    <script src="/PBL/Project%20Web/public/js/easing.js"></script>
    <!-- Color JS -->
    <script src="/PBL/Project%20Web/public/js/colors.js"></script>
    <!-- Popper JS -->
    <script src="/PBL/Project%20Web/public/js/popper.min.js"></script>
    <!-- Bootstrap Datepicker JS -->
    <script src="/PBL/Project%20Web/public/js/bootstrap-datepicker.js"></script>
    <!-- Jquery Nav JS -->
    <script src="/PBL/Project%20Web/public/js/jquery.nav.js"></script>
    <!-- Slicknav JS -->
    <script src="/PBL/Project%20Web/public/js/slicknav.min.js"></script>
    <!-- ScrollUp JS -->
    <script src="/PBL/Project%20Web/public/js/jquery.scrollUp.min.js"></script>
    <!-- Niceselect JS -->
    <script src="/PBL/Project%20Web/public/js/niceselect.js"></script>
    <!-- Tilt Jquery JS -->
    <script src="/PBL/Project%20Web/public/js/tilt.jquery.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="/PBL/Project%20Web/public/js/owl-carousel.js"></script>
    <!-- counterup JS -->
    <script src="/PBL/Project%20Web/public/js/jquery.counterup.min.js"></script>
    <!-- Steller JS -->
    <script src="/PBL/Project%20Web/public/js/steller.js"></script>
    <!-- Wow JS -->
    <script src="/PBL/Project%20Web/public/js/wow.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="/PBL/Project%20Web/public/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up CDN JS -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="/PBL/Project%20Web/public/js/bootstrap.min.js"></script>
    <!-- Main JS -->
    <script src="/PBL/Project%20Web/public/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="/PBL/Project%20Web/public/js/script.js"></script>
</body>

</html>