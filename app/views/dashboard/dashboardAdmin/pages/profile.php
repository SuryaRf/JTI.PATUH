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
    .footer {
      text-align: center;
      color: #9CA3AF;
      margin-top: 92px;
      padding: 16px 0;
      animation: fadeInFooter 1.5s ease;
    }
  </style>
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
    <span class="mask bg-primary opacity-6"></span>
  </div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="/PBL/Project%20Web/public/svg/logo.svg" width="170px" height="170px" class="navbar-brand-img h-100" alt="main_logo">
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="../pages/dashboard.php">
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
            <span class="nav-link-text ms-1">Laporkan</span>
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
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../pages/profile.php">
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
  </aside>
  <div class="main-content position-relative max-height-vh-100 h-100">
    <!-- End Navbar -->
    <div class="card shadow-lg mx-4 card-profile-bottom">
    </div>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0">Profile</p>
                <button class="btn btn-primary btn-sm ms-auto">Edit</button>
              </div>
            </div>
            <div class="card-body">
              <p class="text-uppercase text-sm">Informasi Pengguna</p>
              <div class="card-body p-3">
                <div class="row gx-4">
                  <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                      <img src="../../../../../public/img/team-1.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                  </div>
                  <div class="col-auto my-auto">
                    <div class="h-100">
                      <h5 class="mb-1" id="nama_admin"></h5>
                      <p class="mb-0 font-weight-bold text-sm" id="role_admin"></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nip" class="form-control-label">NIP</label>
                    <input class="form-control" type="text" id="nip_admin" readonly>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nama" class="form-control-label">Nama Lengkap</label>
                    <input class="form-control" type="text" id="nama_admin_input" readonly>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="jk" class="form-control-label">Jenis Kelamin</label>
                    <input class="form-control" type="text" id="jk_admin" readonly>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nohp" class="form-control-label">No.Handphone</label>
                    <input class="form-control" type="text" id="nohp_admin" readonly>
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="jurusan" class="form-control-label">Jurusan</label>
                    <input class="form-control" type="text" value="Teknologi Informasi" readonly>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email" class="form-control-label">Email</label>
                    <input class="form-control" type="text" id="email_admin" readonly>
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
            </div>
          </div>
        </div>

        <footer class="footer">
          Kami Membantu Anda Menjadi Bagian dari Kampus yang Tertib dan Teratur
        </footer>
      </div>
    </div>

    <!--   Core JS Files   -->
    <script src="../../../../../public/js/core/popper.min.js"></script>
    <script src="../../../../../public/js/core/bootstrap.min.js"></script>
    <script src="../../../../../public/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../../../../../public/js/plugins/smooth-scrollbar.min.js"></script>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        // Ambil data admin dari server
        fetch('http://localhost/PBL/Project%20Web/app/controllers/getAdminData.php')
          .then(response => response.json())
          .then(data => {
            if (data.error) {
              alert(data.error);
            } else {
              // Isi data ke dalam elemen input
              document.getElementById('nama_admin').innerText = data.nama_pgw || '';
              document.getElementById('role_admin').innerText = 'Admin'; // Ganti sesuai role jika diperlukan
              document.getElementById('nip_admin').value = data.nip || '';
              document.getElementById('nama_admin_input').value = data.nama_pgw || '';
              document.getElementById('jk_admin').value = data.jk_pegawai || '';
              document.getElementById('nohp_admin').value = data.nohp_pgw || '';
              document.getElementById('email_admin').value = data.email || '';
            }
          })
          .catch(error => {
            console.error('Error:', error);
            alert('Terjadi kesalahan saat mengambil data admin.');
          });
      });
    </script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../../../../../public/js/argon-dashboard.min.js?v=2.1.0"></script>
</body>

</html>