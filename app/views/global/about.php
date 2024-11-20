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
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .section-heading {
            text-align: center;
            margin-top: 2rem;
            color: #FF5722;
            font-weight: bold;
        }

        .section-description {
            text-align: center;
            color: #333;
        }

        .content-section {
            display: flex;
            justify-content: space-around;
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        .content-box {
            max-width: 400px;
        }

        .content-box h3 {
            color: #FF5722;
            font-weight: 600;
        }

        .content-box p {
            color: #333;
            font-size: 1rem;
            line-height: 1.6;
        }
    </style>
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
    <!-- About Section -->
    <section class="about">
        <h2 class="section-heading">Tentang Kami</h2>
        <p class="section-description">
            <span class="highlight">JTI.Patuh</span> merupakan platform pelaporan pelanggaran tata tertib di lingkungan Jurusan Teknologi Informasi<br>
            Politeknik Negeri Malang
        </p>

        <div class="content-section">
            <div class="content-box">
                <h3>Manfaat JTIPatuh</h3>
                <p>
                Untuk memberikan akses informasi yang jelas dan mudah diakses mengenai aturan dan kebijakan yang berlaku di Jurusan Teknologi Informasi Politeknik Negeri Malang, sehingga memudahkan mahasiswa untuk memahami dan mengikuti tata tertib yang ditetapkan, serta memastikan terciptanya lingkungan JTI yang tertib dan terorganisir.</p>
            </div>
            <div class="content-box">
                <h3>Tujuan JTI.Patuh</h3>
                <p>Untuk mempermudah pengelolaan aturan, meningkatkan kepatuhan, dan memastikan transparansi dalam penegakan peraturan di suatu organisasi. Dengan aplikasi ini, pelanggaran bisa dipantau secara <strong>real-time</strong>, sanksi dan penghargaan diterapkan lebih terstruktur, serta laporan jadi lebih mudah diakses untuk evaluasi.</p>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="footer">
        Kami Membantu Anda Menjadi Bagian dari Kampus yang Tertib dan Teratur
    </footer>
    <!-- jquery Min JS -->
    <script src="/PBL/Project%20Web/public/js/jquery.min.js"></script>
    <!-- jquery Migrate JS -->
    <script src="/PBL/Project%20Web/public/js/jquery-migrate-3.0.0.js"></script>
    <!-- jquery Ui JS -->
    <script src="/PBL/Project%20Web/public/js/jquery-ui.min.js"></script>
    <!-- Jquery Nav JS -->
    <script src="/PBL/Project%20Web/public/js/jquery.nav.js"></script>
    <!-- Slicknav JS -->
    <script src="/PBL/Project%20Web/public/js/slicknav.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="/PBL/Project%20Web/public/js/bootstrap.min.js"></script>
    <!-- Main JS -->
    <script src="/PBL/Project%20Web/public/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="/PBL/Project%20Web/public/js/script.js"></script>
</body>

</html>