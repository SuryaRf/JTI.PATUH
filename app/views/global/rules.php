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

        /* Gaya untuk kolom pencarian */
        .search-bar .form-control {
            border: 2px solid #007bff;
            border-radius: 0 0.5rem 0.5rem 0;
            transition: all 0.3s ease-in-out;
        }

        .search-bar .form-control:focus {
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
            border-color: #0056b3;
        }

        .search-bar .input-group-text {
            border: 2px solid #007bff;
            border-radius: 0.5rem 0 0 0.5rem;
        }

        /* Gaya untuk dropdown filter */
        .filter-dropdown .form-select {
            border: 2px solid #6c757d;
            border-radius: 0.5rem;
            transition: all 0.3s ease-in-out;
        }

        .filter-dropdown .form-select:hover,
        .filter-dropdown .form-select:focus {
            box-shadow: 0 0 10px rgba(108, 117, 125, 0.5);
            border-color: #495057;
        }

        .filter-dropdown label {
            font-size: 1rem;
            margin-bottom: 0.5rem;
            display: block;
            color: #495057;
        }

        /* Animasi untuk dropdown */
        .animate-dropdown {
            animation: slideIn 0.5s ease-out;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Ikon dan tambahan gaya */
        .input-group-text i {
            transition: color 0.3s ease;
        }

        .input-group-text:hover i {
            color: #fff;
        }

        /* Warna utama diganti menjadi #223381 */
        .search-bar .search-icon {
            background-color: #223381;
            color: #ffffff;
            border: none;
            border-radius: 0.5rem 0 0 0.5rem;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        /* Hover efek */
        .search-bar .search-icon:hover {
            background-color: #1a265f;
            box-shadow: 0 0 8px rgba(34, 51, 129, 0.6);
        }

        /* Fokus pada input */
        .search-bar .form-control {
            border: 2px solid #223381;
            border-radius: 0 0.5rem 0.5rem 0;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .search-bar .form-control:focus {
            border-color: #1a265f;
            box-shadow: 0 0 8px rgba(34, 51, 129, 0.5);
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

        <!-- Input pencarian -->
        <div class="input-group mb-3 search-bar">
            <span class="input-group-text search-icon" id="search-icon">
                <i class="fas fa-search"></i>
            </span>
            <input
                type="text"
                id="searchInput"
                class="form-control"
                placeholder="Cari Pelanggaran..."
                aria-label="Cari Pelanggaran..."
                aria-describedby="search-icon">
        </div>

        <!-- Dropdown filter tingkat -->
        <div class="mb-3">
            <select id="filterTingkat" class="form-select">
                <option value="">Semua Tingkat</option>
                <option value="I">I</option>
                <option value="II">II</option>
                <option value="III">III</option>
                <option value="IV">IV</option>
                <option value="V">V</option>
            </select>
        </div>


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


        document.addEventListener("DOMContentLoaded", function() {
            const tataTertibTableBody = document.querySelector(".table tbody");
            const searchInput = document.getElementById("searchInput");
            const filterTingkat = document.getElementById("filterTingkat");

            let tataTertibData = []; // Data yang diambil dari server

            // Fetch data dari server
            fetch("http://localhost/PBL/Project%20Web/app/controllers/getDataRulesHome.php")
                .then((response) => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! Status: ${response.status}`);
                    }
                    return response.json();
                })
                .then((data) => {
                    tataTertibData = data; // Simpan data untuk pencarian/filter
                    renderTable(tataTertibData);
                })
                .catch((error) => {
                    console.error("Terjadi kesalahan saat mengambil data:", error);
                });

            // Fungsi untuk merender tabel
            function renderTable(data) {
                tataTertibTableBody.innerHTML = ""; // Bersihkan tabel
                data.forEach((item, index) => {
                    const row = document.createElement("tr");
                    row.innerHTML = `
                <td>${index + 1}</td>
                <td style="word-wrap: break-word; white-space: normal;">${item.nama_pelanggaran}</td>
                <td>${item.tingkat_pelanggaran}</td>
            `;
                    tataTertibTableBody.appendChild(row);
                });
            }

            // Event listener untuk pencarian
            searchInput.addEventListener("input", function() {
                const searchValue = searchInput.value.toLowerCase();
                const filteredData = tataTertibData.filter((item) =>
                    item.nama_pelanggaran.toLowerCase().includes(searchValue)
                );
                renderTable(filteredData);
            });

            // Event listener untuk filter tingkat
            filterTingkat.addEventListener("change", function() {
                const selectedTingkat = filterTingkat.value;
                const filteredData = tataTertibData.filter((item) =>
                    selectedTingkat ? item.tingkat_pelanggaran === selectedTingkat : true
                );
                renderTable(filteredData);
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="/PBL/Project%20Web/public/js/script.js"></script>
</body>

</html>