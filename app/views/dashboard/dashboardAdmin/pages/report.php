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
  <!-- Google Font: Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

  <!-- Nucleo Icons -->
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/js/all.js"></script>
  <!-- CSS Files -->
  <link id="pagestyle" href="../../../../../public/css/argon-dashboard.css?v=2.1.0" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }

    .footer {
      text-align: center;
      color: #9CA3AF;
      margin-top: 92px;
      padding: 16px 0;
      animation: fadeInFooter 1.5s ease;
    }

    h6 {
      color: white;
    }

    /* Add a shadow and transition effect to the card */
    .card {
      transition: all 0.3s ease-in-out;
    }

    .card:hover {
      transform: scale(1.05);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    /* Input fields, select and file-upload elements styling */
    .form-control {
      transition: all 0.3s ease;
      border-radius: 50px;
    }

    .form-control:focus {
      border-color: #007bff;
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .file-upload {
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .file-upload:hover {
      background-color: #e9ecef;
    }

    /* Button styling */
    .btn-primary {
      transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }

    /* Add subtle animation when the form loads */
    @keyframes fadeIn {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }

      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .card {
      animation: fadeIn 0.6s ease-out;
    }

    .card-header {
      background-color: #223381;
      color: white;
      text-align: center;
      padding: 1.5rem;
      border-top-left-radius: 1rem;
      border-top-right-radius: 1rem;
    }

    .card-header h6 {
      margin: 0;
      font-weight: 600;
    }

    .card-header small {
      font-size: 0.9rem;
      color: #d9d9d9;
    }

    .form-control {
      border-radius: 10rem;
      box-shadow: none;
    }

    .form-control:focus {
      box-shadow: 0 0 0 0.2rem rgba(34, 51, 129, 0.25);
      border-color: #223381;
    }

    .form-footer button {
      background-color: #223381;
      border: none;
    }

    .form-footer button:hover {
      background-color: #1c2e6c;
    }

    label {
      font-weight: 500;
      margin-bottom: 0.5rem;
    }

    .container-fluid {
      padding-top: 3rem;
    }
  </style>
</head>

<body class="g-sidenav-show" style="min-height: 100vh;">
<div class="min-height-200  position-absolute w-100" style="background-color: #223381;"></div>
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
          <a class="nav-link active" href="../pages/report.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-exclamation-circle text-dark text-sm opacity-10"></i> <!-- Ikon alert Font Awesome -->
            </div>
            <span class="nav-link-text ms-1">Melaporkan Pelanggaran</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="../pages/manage.php">
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
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-100" style="color: #d3d3d3;">
            Account pages
          </h6>
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
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Melaporkan Pelanggaran</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Melaporkan Pelanggaran</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">

          </div>
          <ul class="navbar-nav  justify-content-end">

            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
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
    <!-- End Navbar -->
    <div class="container-fluid">
      <div class="row justify-content-center">
        <!-- Card for the Report Form -->
        <div class="col-md-8 mt-3">
          <div class="card shadow-lg border-0 rounded-4">
            <div class="card-header">
              <h6>Melaporkan Pelanggaran</h6>
              <small>Form Laporan</small>
            </div>
            <div class="card-body p-4">
              <form action="/PBL/Project%20Web/app/controllers/processReport.php" method="POST" enctype="multipart/form-data">
                <div class="form-group mb-4">
                  <label for="nim">Mahasiswa Terlapor</label>
                  <input type="text" id="nim" name="nim" class="form-control" placeholder="Masukkan NIM mahasiswa" required>
                </div>
                <div class="form-group mb-4">
                  <label for="pelanggaran">Nama Pelanggaran</label>
                  <select id="pelanggaran" name="id_tatib" class="form-control" required>
                    <option value="">Pilih Pelanggaran</option>
                    <!-- Tambahkan pilihan pelanggaran -->
                  </select>
                </div>
                <div class="form-group mb-4">
                  <label for="waktu">Waktu</label>
                  <input type="datetime-local" id="waktu" name="waktu_pelanggaran" class="form-control" placeholder="Pilih Waktu Kejadian" required>
                </div>
                <div class="form-group mb-4">
                  <label for="lokasi">Lokasi</label>
                  <input type="text" id="lokasi" name="lokasi" class="form-control" placeholder="Masukkan Lokasi Kejadian" required>
                </div>
                <div class="form-group mb-4">
                  <label for="bukti">Bukti</label>
                  <input type="file" name="bukti" id="bukti" class="form-control" required>
                </div>
                <div class="form-footer text-center mt-4">
                  <button type="submit" class="btn btn-primary btn-lg rounded-pill px-4 py-2">Kirim</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer">
      Kami Membantu Anda Menjadi Bagian dari Kampus yang Tertib dan Teratur
    </footer>
  </main>

  </div>
  <!--   Core JS Files   -->
  <script src="../../../../../public/js/core/popper.min.js"></script>
  <script src="../../../../../public/js/core/bootstrap.min.js"></script>
  <script src="../../../../../public/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../../../../../public/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const pelanggaranDropdown = document.getElementById("pelanggaran");

      // Fetch data dari endpoint
      fetch("http://localhost/PBL/Project%20Web/app/controllers/getDataRules.php")
        .then((response) => {
          if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
          }
          return response.json();
        })
        .then((data) => {
          // Tambahkan opsi ke dropdown
          data.forEach((item) => {
            const option = document.createElement("option");
            option.value = item.id_tatib;
            option.textContent = `${item.nama_pelanggaran} (Tingkat: ${item.tingkat_pelanggaran})`;
            pelanggaranDropdown.appendChild(option);
          });
        })
        .catch((error) => {
          console.error("Terjadi kesalahan saat mengambil data pelanggaran:", error);
        });
    });
  </script>

  <script>
    document.querySelector('form').addEventListener('submit', function(e) {
      e.preventDefault(); // Mencegah refresh halaman

      // Ambil data dari form
      const formData = new FormData(this);

      // Kirim data via AJAX menggunakan Fetch API
      fetch('http://localhost/PBL/Project%20Web/app/controllers/processReport.php', {
          method: 'POST',
          body: formData
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            // Tampilkan pop-up animasi SweetAlert jika sukses
            Swal.fire({
              title: 'Laporan Terkirim!',
              text: data.success,
              icon: 'success',
              showConfirmButton: false,
              timer: 3000
            }).then(() => {
              // Reload atau arahkan ke halaman lain jika perlu
              window.location.href = 'report.php';
            });
          } else {
            // Jika gagal, tampilkan error
            Swal.fire({
              title: 'Gagal!',
              text: data.error || 'Terjadi kesalahan saat mengirim laporan.',
              icon: 'error',
              confirmButtonText: 'Coba Lagi'
            });
          }
        })
        .catch(error => {
          console.error('Error:', error);
          Swal.fire({
            title: 'Oops!',
            text: 'Terjadi kesalahan saat memproses laporan.',
            icon: 'error',
            confirmButtonText: 'Coba Lagi'
          });
        });
    });
  </script>


  <!-- Tambahkan SweetAlert2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../../../../../public/js/argon-dashboard.min.js?v=2.1.0"></script>
</body>

</html>