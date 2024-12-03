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
    <style>
        .content {
            margin: 2rem auto;
            max-width: 800px;
            text-align: center;
        }

        table {
            margin: 0 auto;
            width: 100%;
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

    <!-- Content Section -->
    <section class="content">
        <h2>Ketahui Pelanggaran di Tata Tertib</h2>
        <p>Cek detail nya dibawah ini</p><br>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>No.</th>
                        <th>Pelanggaran</th>
                        <th>Tingkat</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data akan dimasukkan melalui JavaScript -->
                </tbody>
            </table>
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
    <!-- Bootstrap JS -->
    <script src="/PBL/Project%20Web/public/js/bootstrap.min.js"></script>
    <!-- Main JS -->
    <script src="/PBL/Project%20Web/public/js/main.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const tataTertibTableBody = document.querySelector(".table tbody");

            // Fetch data from the server
            fetch("http://localhost/PBL/Project%20Web/app/controllers/getDataRulesHome.php")
                .then((response) => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! Status: ${response.status}`);
                    }
                    return response.json();
                })
                .then((data) => {
                    // Clear existing rows
                    tataTertibTableBody.innerHTML = "";

                    // Populate the table with the fetched data
                    data.forEach((item, index) => {
                        const row = document.createElement("tr");
                        row.innerHTML = `
                    <td>${index + 1}</td>
                    <td style="word-wrap: break-word; white-space: normal;">${item.nama_pelanggaran}</td>
                    <td>${item.tingkat_pelanggaran}</td>
                `;
                        tataTertibTableBody.appendChild(row);
                    });
                })
                .catch((error) => {
                    console.error("Terjadi kesalahan saat mengambil data:", error);
                });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="/PBL/Project%20Web/public/js/script.js"></script>
</body>

</html>