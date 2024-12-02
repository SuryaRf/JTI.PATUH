<?php
session_start();

// Pastikan sesi NIM ada
if (!isset($_SESSION['id_pegawai'])) {
    // Jika tidak ada, arahkan ke halaman login
    header("Location: /PBL/Project%20Web/app/views/auth/chooseRole.php");
    exit();
}

$id_pegawai = $_SESSION['id_pegawai']; // Ambil id_pegawai dari sesi
// Mencegah cache halaman
header("Cache-Control: no-cache, must-revalidate"); // Jangan simpan di cache
header("Pragma: no-cache"); // Untuk versi lama browser
header("Expires: 0"); // Waktu kadaluarsa

if (!isset($_SESSION['id_pegawai'])) {
    header("Location: /PBL/Project%20Web/app/views/auth/chooseRole.php");
    exit();
}

$id_pegawai = $_SESSION['id_pegawai']; // Ambil id_pegawai dari sesi
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../../../../../public/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../../../../public/img/favicon.png">
    <title>
        Dashboard Admin
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/js/all.js"></script>
    <!-- CSS Files -->
    <link id="pagestyle" href="../../../../../public/css/argon-dashboard.css?v=2.1.0" rel="stylesheet" />

    <style>
        .card {
            aspect-ratio: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 0;
        }

        .footer {
            text-align: center;
            color: #9CA3AF;
            margin-top: 92px;
            padding: 16px 0;
            animation: fadeInFooter 1.5s ease;
        }

        .card-body {
            text-align: center;
            /* Menempatkan teks di tengah */
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f7f9fc;
        }

        .container {
            background: #ffffff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        table {
            border-collapse: separate;
            border-spacing: 0 10px;
        }

        .table-striped tbody tr {
            background-color: #f9f9f9;
        }

        .table-striped tbody tr:hover {
            background-color: #eef2f7;
        }

        .table thead th {
            text-transform: uppercase;
            font-weight: 600;
            color: #223381;
        }

        .badge {
            font-size: 0.875rem;
            padding: 0.5em 0.75em;
        }

        .btn-primary {
            background-color: #223381;
            border: none;
            border-radius: 12px;
            margin-top: 15px;
        }

        .btn-primary:hover {
            background-color: #1a285e;
        }



        .table-dark th {
            color: white !important;
            /* Use !important to override any conflicting styles */
        }
    </style>
</head>

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-200 bg-dark position-absolute w-100"></div>
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.php " target="_blank">
                <img src="/PBL/Project%20Web/public/svg/logo.svg" width="170px" height="170px" class="navbar-brand-img h-100" alt="main_logo">
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../pages/dashboard.php">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-home text-dark text-sm opacity-10"></i> <!-- Ikon Beranda -->
                        </div>
                        <span class="nav-link-text ms-1">Beranda</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/report.php">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-exclamation-circle text-dark text-sm opacity-10"></i> <!-- Ikon alert Font Awesome -->
                        </div>
                        <span class="nav-link-text ms-1">Melaporkan Pelanggaran</span>
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link active" href="../pages/manage.php">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-folder-17 text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Kelola Informasi</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../pages/history.php">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-history text-dark text-sm opacity-10"></i> <!-- Ikon Riwayat -->
                        </div>
                        <span class="nav-link-text ms-1">Riwayat Laporan</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../pages/notification.php">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-bell text-dark text-sm opacity-10"></i> <!-- Ganti ikon di sini -->
                        </div>
                        <span class="nav-link-text ms-1">Notifikasi</span>
                    </a>
                </li>

                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="../pages/profile.php">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Profil</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../../../controllers/logout.php">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-sign-out-alt text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Keluar</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Beranda</li>
                    </ol>
                    <h6 class="font-weight-bolder text-white mb-0">Beranda</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer"></i>
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="../../../../../public/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New message</span> from Laur
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="../../../../../public/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New album</span> by Travis Scott
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                                                    <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    Payment successfully completed
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="customNavbar">
            <a class="navbar-brand" href="#">Sistem Pelaporan</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true " href="#" id="laporanBtn">
                                    <i class="fas fa-file-alt"></i>
                                    <span class="ms-2">Laporan</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false" href="#" id="tataTertibBtn">
                                    <i class="fas fa-gavel"></i>
                                    <span class="ms-2">Tata Tertib</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
        </nav>>
        <!-- Konten -->
        <div class="container mt-5" id="laporanContent">
            <!-- Konten Laporan -->
            <table class="table table-striped table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th class="text-center">No. Pelanggaran</th>
                        <th>Nama Pelanggaran</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">ABC01</td>
                        <td>Merokok</td>
                        <td class="text-center"><span class="badge bg-warning text-white">Pending</span></td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-primary">Check</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">ABC02</td>
                        <td>Merusak sarana prasarana</td>
                        <td class="text-center"><span class="badge bg-warning text-white">Pending</span></td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-primary">Check</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">ABC03</td>
                        <td>Judi online</td>
                        <td class="text-center"><span class="badge bg-warning text-white">Pending</span></td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-primary">Check</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="container mt-5" id="tataTertibContent" style="display: none;">
            <!-- Konten Tata Tertib -->
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>No.</th>
                        <th>Pelanggaran</th>
                        <th>Tingkat</th>
                        <th>Saksi</th> <!-- Kolom Saksi -->
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data akan dimasukkan melalui JavaScript -->
                </tbody>
            </table>
        </div>


        </div>

        <!-- Modal untuk detail pelanggaran -->
        <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="detailModalLabel">Detail Pelanggaran</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <img id="modalBuktiFoto" src="" alt="Bukti Foto" class="img-fluid rounded w-100" style="cursor: pointer;">
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label class="form-label" style="font-weight: bold;">Nama Mahasiswa Terlapor</label>
                                    <p id="modalNamaMahasiswa" class="form-control"></p>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" style="font-weight: bold;">NIM Mahasiswa Terlapor</label>
                                    <p id="modalNimMahasiswa" class="form-control"></p>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" style="font-weight: bold;">Tingkat dan Jenis Pelanggaran</label>
                                    <p id="modalTingkatJenis" class="form-control"></p>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" style="font-weight: bold;">Waktu</label>
                                    <p id="modalWaktu" class="form-control"></p>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" style="font-weight: bold;">Lokasi</label>
                                    <p id="modalLokasi" class="form-control"></p>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" style="font-weight: bold;">Pelapor</label>
                                    <p id="modalPelapor" class="form-control"></p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-3">

                            <button class="btn btn-danger me-2">Tolak</button>
                            <button class="btn btn-success">Terima</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal untuk Edit Tata Tertib -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Tata Tertib</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="editTatibForm">
                        <div class="modal-body">
                            <input type="hidden" id="editIdTatib">
                            <div class="mb-3">
                                <label for="editNama" class="form-label">Nama Pelanggaran</label>
                                <input type="text" class="form-control" id="editNama" required>
                            </div>
                            <div class="mb-3">
                                <label for="editTingkat" class="form-label">Tingkat Pelanggaran</label>
                                <input type="text" class="form-control" id="editTingkat" required>
                            </div>
                            <div class="mb-3">
                                <label for="editSanksi" class="form-label">Keterangan Sanksi</label>
                                <input type="text" class="form-control" id="editSanksi">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <footer class="footer">
            Kami Membantu Anda Menjadi Bagian dari Kampus yang Tertib dan Teratur
        </footer>
    </main>
    <div class="fixed-plugin">

        <!--   Core JS Files   -->
        <script src="../../../../../public/js/core/popper.min.js"></script>
        <script src="../../../../../public/js/core/bootstrap.min.js"></script>
        <script src="../../../../../public/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="../../../../../public/js/plugins/smooth-scrollbar.min.js"></script>

        <script>
            document.getElementById('laporanBtn').addEventListener('click', function() {
                document.getElementById('laporanContent').style.display = 'block';
                document.getElementById('tataTertibContent').style.display = 'none';
            });

            document.getElementById('tataTertibBtn').addEventListener('click', function() {
                document.getElementById('laporanContent').style.display = 'none';
                document.getElementById('tataTertibContent').style.display = 'block';
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                fetch('http://localhost/PBL/Project%20Web/app/controllers/violationsPegawai.php')
                    .then(response => response.json())
                    .then(data => {
                        if (data.error) {
                            console.error('Error:', data.error);
                            alert('Error: ' + data.error);
                        } else {
                            // Mengisi data pelanggaran ke dalam tabel
                            const tbody = document.querySelector('tbody');
                            tbody.innerHTML = ''; // Menghapus baris tabel yang lama

                            data.forEach(violation => {
                                const row = document.createElement('tr');
                                row.innerHTML = `
            <td class="text-center">${violation.id_pelanggaran}</td>
            <td style="word-wrap: break-word; white-space: normal;">${violation.nama_pelanggaran}</td>
            <td class="text-center"><span class="badge bg-warning text-white p-2 fs-7 rounded-3"
                style="width: 100px; text-align: center;">${violation.status}</span></td>
            <td class="text-center rounded-end">
              <button class="btn btn-primary py-1 px-4 fs-7 w-100 rounded-3 check" 
                      data-bs-toggle="modal"
                      data-bs-target="#detailModal"
                      data-id="${violation.id_pelanggaran}">CHECK</button>
            </td>
          `;
                                tbody.appendChild(row);
                            });
                        }
                    })
                    .catch(error => {
                        console.error('Fetch Error:', error);
                        alert('Terjadi kesalahan saat mengambil data.');
                    });
            });


            document.addEventListener('DOMContentLoaded', function() {
                document.addEventListener('click', function(event) {
                    if (event.target.classList.contains('check')) {
                        const idPelanggaran = event.target.getAttribute('data-id');

                        if (isNaN(idPelanggaran)) {
                            alert('ID Pelanggaran tidak valid.');
                            return;
                        }

                        fetch(`http://localhost/PBL/Project%20Web/app/controllers/getViolationDetails.php?id=${idPelanggaran}`)
                            .then(response => response.json())
                            .then(data => {
                                if (data.error) {
                                    alert('Terjadi kesalahan: ' + data.error);
                                } else {
                                    document.getElementById('modalNamaMahasiswa').textContent = data.nama_terlapor;
                                    document.getElementById('modalNimMahasiswa').textContent = data.nim_terlapor;
                                    document.getElementById('modalTingkatJenis').textContent = `${data.tingkat_pelanggaran} - ${data.jenis_pelanggaran}`;
                                    document.getElementById('modalWaktu').textContent = data.waktu_pelanggaran;
                                    document.getElementById('modalLokasi').textContent = data.lokasi;

                                    if (data.pelapor) {
                                        document.getElementById('modalPelapor').textContent = `${data.pelapor.type}: ${data.pelapor.id} (${data.pelapor.name})`;
                                    } else {
                                        document.getElementById('modalPelapor').textContent = 'Tidak ada pelapor.';
                                    }

                                    const modalBuktiFoto = document.getElementById('modalBuktiFoto');
                                    if (data.bukti_foto_url) {
                                        modalBuktiFoto.src = data.bukti_foto_url;
                                        modalBuktiFoto.style.display = 'block';
                                    } else {
                                        modalBuktiFoto.src = '';
                                        modalBuktiFoto.style.display = 'none';
                                    }

                                    const detailModal = new bootstrap.Modal(document.getElementById('detailModal'));
                                    detailModal.show();
                                }
                            })
                            .catch(error => {
                                console.error('Fetch Error:', error);
                                alert('Terjadi kesalahan saat mengambil detail laporan.');
                            });
                    }
                });
            });

            // Event listener untuk tombol "Terima" dan "Tolak"
            document.addEventListener('click', function(event) {
                if (event.target.classList.contains('btn-success') || event.target.classList.contains('btn-danger')) {
                    const idPelanggaran = document.querySelector('.check').getAttribute('data-id');
                    const newStatus = event.target.classList.contains('btn-success') ? 'valid' : 'Reject';

                    if (isNaN(idPelanggaran)) {
                        alert('ID Pelanggaran tidak valid.');
                        return;
                    }

                    // Kirim permintaan untuk memperbarui status laporan
                    fetch(`http://localhost/PBL/Project%20Web/app/controllers/updateViolationStatus.php`, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify({
                                id_pelanggaran: idPelanggaran,
                                status: newStatus
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire({
                                    title: 'Laporan Diterima!',
                                    text: 'Status laporan telah berhasil diperbarui.',
                                    icon: 'success',
                                    showConfirmButton: false,
                                    timer: 3000
                                }).then(() => {
                                    // Reload atau arahkan ke halaman lain jika perlu
                                    window.location.href = 'manage.php';
                                });
                                // Tutup modal setelah status diperbarui
                                const modal = new bootstrap.Modal(document.getElementById('detailModal'));
                                modal.hide();

                            } else {
                                alert('Gagal memperbarui status laporan');
                            }
                        })
                        .catch(error => {
                            console.error('Fetch Error:', error);
                            alert('Terjadi kesalahan saat memperbarui status laporan.');
                        });
                }
            });
        </script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const tataTertibTableBody = document.querySelector("#tataTertibContent tbody");

                // Fetch data from the server
                fetch("http://localhost/PBL/Project%20Web/app/controllers/getDataRules.php")
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
                    <td style="width: 200px; word-wrap: break-word; white-space: normal; overflow: hidden;">${item.keterangan_sanksi || 'Tidak ada saksi'}</td>
                    <td>
                        <div class="ms-auto text-center">
                            <button 
    class="btn btn-link text-dark px-3 mb-0 btn-edit" 
    data-id="${item.id_tatib}" 
    data-tingkat="${item.tingkat_pelanggaran}" 
    data-sanksi="${item.keterangan_sanksi || ''}">
    <i class="fas fa-pencil-alt text-dark me-2"></i>Edit
</button>

                            <button class="btn btn-link text-danger text-gradient px-3 mb-0 btn-delete" data-id="${item.id_tatib}">
                                <i class="far fa-trash-alt me-2"></i>Delete
                            </button>
                        </div>
                    </td>
                `;
                            tataTertibTableBody.appendChild(row);
                        });

                        // Add event listeners for edit and delete buttons
                        tataTertibTableBody.querySelectorAll(".btn-edit").forEach((btn) => {
                            btn.addEventListener("click", handleEdit);
                        });

                        tataTertibTableBody.querySelectorAll(".btn-delete").forEach((btn) => {
                            btn.addEventListener("click", handleDelete);
                        });
                    })
                    .catch((error) => {
                        console.error("Terjadi kesalahan saat mengambil data:", error);
                    });



                // Handle edit action
                function handleEdit(event) {
                    const button = event.target.closest("button");
                    const id = button.dataset.id;
                    const nama = button.closest("tr").querySelector("td:nth-child(2)").textContent;
                    const tingkat = button.dataset.tingkat;
                    const sanksi = button.dataset.sanksi;

                    // Isi nilai ke dalam modal
                    document.querySelector("#editIdTatib").value = id;
                    document.querySelector("#editNama").value = nama;
                    document.querySelector("#editTingkat").value = tingkat;
                    document.querySelector("#editSanksi").value = sanksi;

                    // Tampilkan modal
                    const editModal = new bootstrap.Modal(document.querySelector("#editModal"));
                    editModal.show();

                    // Tangani submit form di dalam modal
                    document.querySelector("#editTatibForm").addEventListener("submit", function(e) {
                        e.preventDefault();

                        // Ambil nilai terbaru dari form
                        const id = document.querySelector("#editIdTatib").value;
                        const nama = document.querySelector("#editNama").value;
                        const tingkat = document.querySelector("#editTingkat").value;
                        const sanksi = document.querySelector("#editSanksi").value;

                        // Kirim permintaan update ke server
                        fetch("http://localhost/PBL/Project%20Web/app/controllers/updateTatib.php", {
                                method: "POST",
                                headers: {
                                    "Content-Type": "application/json",
                                },
                                body: JSON.stringify({
                                    id,
                                    nama,
                                    tingkat,
                                    sanksi
                                }),
                            })
                            .then((response) => {
                                if (!response.ok) {
                                    throw new Error(`HTTP error! Status: ${response.status}`);
                                }
                                return response.json();
                            })
                            .then((result) => {
                                // Tampilkan pop-up animasi SweetAlert jika sukses
                                Swal.fire({
                                    title: 'Tata Tertib Diperbarui!',
                                    text: 'Tata Tertib telah berhasil diperbarui.',
                                    icon: 'success',
                                    showConfirmButton: false,
                                    timer: 3000,

                                }).then(() => {
                                    // Reload atau arahkan ke halaman lain jika perlu
                                    window.location.href = 'manage.php';
                                });

                            })
                            .catch((error) => {
                                console.error("Terjadi kesalahan saat mengupdate data:", error);
                            });

                        // Jika sanksi juga perlu diperbarui secara terpisah
                        if (sanksi !== null) {
                            fetch("http://localhost/PBL/Project%20Web/app/controllers/updateSanksi.php", {
                                    method: "POST",
                                    headers: {
                                        "Content-Type": "application/json",
                                    },
                                    body: JSON.stringify({
                                        tingkat,
                                        sanksi
                                    }),
                                })
                                .then((response) => {
                                    if (!response.ok) {
                                        throw new Error(`HTTP error! Status: ${response.status}`);
                                    }
                                    return response.json();
                                })
                                .then((result) => {

                                })
                                .catch((error) => {
                                    console.error("Terjadi kesalahan saat mengupdate sanksi:", error);
                                });
                        }
                    });
                }




                // Handle delete action
                function handleDelete(event) {
                    const id = event.target.closest("button").dataset.id;

                    if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
                        // Send delete request to the server
                        fetch("http://localhost/PBL/Project%20Web/app/controllers/deleteTatib.php", {
                                method: "POST",
                                headers: {
                                    "Content-Type": "application/json"
                                },
                                body: JSON.stringify({
                                    id
                                }),
                            })
                            .then((response) => {
                                if (!response.ok) {
                                    throw new Error(`HTTP error! Status: ${response.status}`);
                                }
                                return response.json();
                            })
                            .then((result) => {
                                alert(result.message || "Data berhasil dihapus!");
                                location.reload(); // Reload data
                            })
                            .catch((error) => {
                                console.error("Terjadi kesalahan saat menghapus data:", error);
                            });
                    }
                }
            });
        </script>

        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>

        <!-- Tambahkan SweetAlert2 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="../../../../../public/js/argon-dashboard.min.js?v=2.1.0"></script>
</body>

</html>