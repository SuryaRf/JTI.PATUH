<?php
session_start();

// Pastikan sesi NIM ada
if (!isset($_SESSION['nim'])) {
  // Jika tidak ada, arahkan ke halaman login
  header("Location: /PBL/Project%20Web/app/views/auth/chooseRole.php");
  exit();
}

$nim = $_SESSION['nim']; // Ambil NIM dari sesi
// Mencegah cache halaman
header("Cache-Control: no-cache, must-revalidate"); // Jangan simpan di cache
header("Pragma: no-cache"); // Untuk versi lama browser
header("Expires: 0"); // Waktu kadaluarsa

if (!isset($_SESSION['nim'])) {
  header("Location: /PBL/Project%20Web/app/views/auth/chooseRole.php");
  exit();
}

$nim = $_SESSION['nim']; // Ambil NIM dari sesi
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../../../../../public/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../../../../public/img/favicon.png">
  <title>
    Dashboard Mahasiswa
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/js/all.js"></script>
  <!-- CSS Files -->
  <link id="pagestyle" href="../../../../../public/css/argon-dashboard.css?v=2.1.0" rel="stylesheet" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">



  <style>
    html,
    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      /* Pastikan font Poppins digunakan */
      letter-spacing: 0.3px;
      /* Menambahkan jarak antar huruf */
    }

    .card {
      aspect-ratio: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 0;
      /* Menghapus sudut melengkung */
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

  
    .left, .right {
    display: flex;
    align-items: center;
    }

    .left .message-bubble, .right .message-bubble {
        max-width: 80%;
        padding: 10px;
        border-radius: 15px;
        background-color: #f1f1f1;
        margin: 5px;
        font-size: 14px;
    }

    .right .left .message-bubble {
        background-color: #e1f7d5; 
        text-align: right;
    }

    .right {
        justify-content: flex-end;
    }

    .left {
        justify-content: flex-start; 
    }

    .right img {
        border-radius: 0; 
        width: 300px; 
        height: 250px; 
        object-fit: cover;
    }

    .right i, .left i {
        font-size: 24px;
    }

    .right .message-bubble {
        margin-left: 15px;
    }

    .left .message-bubble {
        margin-right: 15px;
    }

  </style>
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-200  position-absolute w-100" style="background-color: #223381;"></div>
  <aside
    class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.php "
        target="_blank">
        <img src="/PBL/Project%20Web/public/svg/logo.svg" width="170px" height="170px" class="navbar-brand-img h-100"
          alt="main_logo">
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="../pages/dashboard.php">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-home text-dark text-sm opacity-10"></i> <!-- Ikon Beranda -->
            </div>
            <span class="nav-link-text ms-1">Beranda</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../pages/report.php">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-exclamation-circle text-dark text-sm opacity-10"></i> <!-- Ikon alert Font Awesome -->
            </div>
            <span class="nav-link-text ms-1">Laporkan</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="../pages/history.php">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-history text-dark text-sm opacity-10"></i> <!-- Ikon Riwayat -->
            </div>
            <span class="nav-link-text ms-1">Riwayat Laporan</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="../pages/notification.php">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
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
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Profil</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../../../controllers/logout.php">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
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
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
      data-scroll="false">
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
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown"
                aria-expanded="false">
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
                          <span class="font-weight-bold">Pengajuan Banding Diterima</span> dari Pelapor
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
                        <img src="../../../../../public/img/small-logos/logo-spotify.svg"
                          class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">Pengajuan Laporan Ditolak</span> by Admin
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
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background"
                                    d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                    opacity="0.593633743"></path>
                                  <path class="color-background"
                                    d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                  </path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Pelanggaran Kedisiplinan
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
    <div class="container-fluid py-1">
      <div class="row justify-content-center" style="margin-top: 10px; margin-right: 0;">
        <!-- Box 1 -->
        <div class="col-xl-2 col-sm-4 mb-xl-0 mb-4">
          <div class="card shadow" style="border: 5px solid #223381; border-radius: 25px; background-color: #f7f9fc;">
            <div class="card-body p-2 d-flex align-items-center justify-content-center">
              <div class="text-center">
                <p class="text-sm mb-2 text-uppercase font-weight-bold text-dark"
                  style="font-size: 13px !important; font-weight: 700 !important;">
                  Total Laporan
                </p>
                <h5 id="totalLaporan" class="font-weight-bolder"
                  style="font-size: 45px; color: rgba(34, 51, 129, 0.8);">
                  Loading...
                </h5>
              </div>
            </div>
          </div>
        </div>

        <!-- Box 2 -->
        <div class="col-xl-2 col-sm-4 mb-xl-0 mb-4">
          <div class="card shadow" style="border: 5px solid #223381; border-radius: 25px; background-color: #f7f9fc;">
            <div class="card-body p-2 d-flex align-items-center justify-content-center">
              <div class="text-center">
                <p class="text-sm mb-2 text-uppercase font-weight-bold text-dark"
                  style="font-size: 13px !important; font-weight: 700 !important;">
                  Laporan Selesai
                </p>
                <h5 id="laporanSelesai" class="font-weight-bolder"
                  style="font-size: 45px; color: rgba(34, 51, 129, 0.8);">
                  Loading...
                </h5>
              </div>
            </div>
          </div>
        </div>

        <!-- Box 3 -->
        <div class="col-xl-2 col-sm-4 mb-xl-0 mb-4">
          <div class="card shadow" style="border: 5px solid #223381; border-radius: 25px; background-color: #f7f9fc;">
            <div class="card-body p-2 d-flex align-items-center justify-content-center">
              <div class="text-center">
                <p class="text-sm mb-2 text-uppercase font-weight-bold text-dark"
                  style="font-size: 13px !important; font-weight: 700 !important;">
                  Laporan Tertunda
                </p>
                <h5 id="laporanTertunda" class="font-weight-bolder"
                  style="font-size: 45px; color: rgba(34, 51, 129, 0.8);">
                  Loading...
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="container mt-5" style="max-width: 1200px;">
      <table class="table table-striped table-hover align-middle w-100">
        <thead class="table-light">
          <tr class="rounded-3">
            <th class="text-center rounded-start">No. Pelanggaran</th>
            <th>Nama Pelanggaran</th>
            <th class="text-center">Status</th>
            <th class="text-center rounded-end">Detail</th>
          </tr>
        </thead>
        <tbody>
          <tr class="rounded-3">
            <td class="text-center rounded-start">ABC01</td>
            <td>Mewarnai rambut berwarna punk</td>
            <td class="text-center">
              <span class="badge bg-warning text-white p-2 fs-7 rounded-3" style="width: 100px; text-align: center;">
                TERTUNDA
              </span>
            </td>
            <td class="text-center rounded-end">
              <button class="btn btn-primary py-1 px-4 fs-7 w-60 rounded-3" data-bs-toggle="modal"
                data-bs-target="#detailModalABC01">
                CHECK
              </button>
            </td>
          </tr>

          <!-- Modal for ABC01 -->
          <div class="modal fade" id="detailModalABC01" tabindex="-1" aria-labelledby="detailModalLabelABC01"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="detailModalLabelABC01" style="font-size: 20px; font-weight: 600px; color: #223381;">Detail Pelanggaran</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <!-- Foto yang Bisa Diklik untuk Zoom -->
                    <div class="col-md-4">
                      <div class="text-center">
                        <img src="../../../../../public/img/student.jpg" alt="Bukti Zoom"
                          class="img-fluid rounded w-100" data-bs-toggle="modal" data-bs-target="#buktiZoomModalABC01"
                          style="cursor: pointer;">
                      </div>
                    </div>
                    <!-- Informasi di sebelah kanan -->
                    <div class="col-md-8">
                      <div class="mb-3">
                        <label class="form-label" style="font-weight: 600px; color: #223381;">Nama Mahasiswa Terlapor</label>
                        <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">
                          Surya Rahmat
                        </p>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" style="font-weight: bold; color: #223381;">NIM Mahasiswa Terlapor</label>
                        <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">
                          2341760020
                        </p>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" style="font-weight: bold; color: #223381;">Tingkat dan Jenis Pelanggaran</label>
                        <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">
                          IV - Mewarnai rambut berwarna punk
                        </p>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" style="font-weight: 600px; color: #223381;">Waktu</label>
                        <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">
                          Kamis, 14 November 2024 pukul 14:59
                        </p>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" style="font-weight: 600px; color: #223381;">Lokasi</label>
                        <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">
                          Di Ruang Kelas
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-end align-items-start" style="margin-top: 8px;">
                    <!-- Tombol Riwayat (Sedikit diangkat) -->
                    <button class="btn btn-primary rounded-3 me-2"
                      style="font-size: 14px; padding: 6px 12px; width: 120px; height: 40px; transform: translateY(-15px);"
                      data-bs-toggle="modal" data-bs-target="#riwayatModal">
                      Riwayat
                    </button>
                    <!-- Tombol Aju Banding -->
                    <button class="btn btn-warning rounded-3 me-2"
                      style="font-size: 14px; padding: 6px 12px; width: 120px; height: 40px;" data-bs-toggle="modal"
                      data-bs-target="#ajuBandingModal">
                      Aju Banding
                    </button>
                    <!-- Tombol Terima -->
                    <button class="btn btn-success rounded-3"
                      style="font-size: 14px; padding: 6px 12px; width: 120px; height: 40px;" id="submitBtn"
                      data-bs-toggle="modal" data-bs-target="#successModal">
                      Terima
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal untuk Zoom Gambar -->
          <div class="modal fade" id="buktiZoomModalABC01" tabindex="-1" aria-labelledby="buktiZoomModalLabelABC01"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
              <div class="modal-content">
                <div class="modal-body p-0">
                  <p
                    style="font-weight: bold; color: #223381; margin-bottom: 0px; margin-left: 20px; margin-top: 20px;">
                    Bukti Pelanggaran</p>
                  <div class="d-flex justify-content-center align-items-center">
                    <div style="padding: 20px; background-color: white; border-radius: 8px;">
                      <img src="../../../../../public/img/student.jpg" alt="Bukti Zoom" class="img-fluid rounded"
                        style="max-width: 100%; height: auto; display: block; margin: 0;">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal untuk Aju Banding -->
          <div class="modal fade" id="ajuBandingModal" tabindex="-1" aria-labelledby="ajuBandingModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content" style="font-family: 'Poppins', sans-serif;">
                <div class="modal-header">
                  <h4 class="modal-title" id="ajuBandingModalLabel" style="color: #223381; font-size: 20px; ">AJUKAN
                    BANDING</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <h6 style="color: #223381; font-size: 16px;">Deskripsi Aju Banding</h6>
                  <textarea class="form-control" rows="8" style="background-color: #eaecef; font-size: 14px;"
                    placeholder="Masukkan banding" required></textarea>

                  <h6 class="mt-3" style="color: #223381; font-size: 16px;">Bukti Aju Banding <span
                      style="color: #f05529; font-size: 16px;">*</span></h6>
                  <div class="border p-3 rounded bg-light mb-3 text-center" style="background-color: #f0f0f0;">
                    <label for="formFile" class="d-block">
                      <img src="../../../../../public/img/upload-file.png" alt="Upload Icon"
                        style="width: 30px; height: 30px; margin-bottom: 8px; opacity: 0.5;">
                      <span class="d-block" style="font-size: 14px; font-weight: normal; color: #6c757d;">Unggah bukti
                        yang menguatkan Anda disini!</span>
                    </label>
                    <input class="form-control d-none" type="file" id="formFile">
                  </div>
                  <p class="text-warning mb-0" style="font-size: 14px; color: #f05529;">*tidak wajib diisi</p>
                </div>
                <div class="modal-footer">
                  <button type="button" style="font-size: 14px; padding: 6px 12px; width: 120px; height: 40px;"
                    class="btn btn-primary" id="submitBtn" data-bs-toggle="modal"
                    data-bs-target="#successModal">Kirim</button>
                </div>
              </div>
            </div>
          </div>


          <!-- Modal untuk Kirim dan Terima-->

              <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" style="max-width: 300px;">
                <div class="modal-content">
                  <div class="modal-body text-center">
                    <div class="d-flex align-items-center justify-content-center">
                      <div class="orange-circle">
                        <i class="fas fa-check text-white fa-2x"></i>
                      </div>
                    </div>
                    <img src="../../../../../public/img/success-icon.png" alt="Success Image" class="img-fluid mt-3" style="max-width: 300px;">
                    <h4 class="card-title mt-3" style="color: #223381;">SUKSES</h4>
                  </div>
                </div>
              </div>
            </div>

          <tr class="rounded-3">
            <td class="text-center rounded-start">ABC02</td>
            <td>Menyontek</td>
            <td class="text-center">
              <span class="badge bg-danger text-white p-2 fs-7 rounded-3" style="width: 100px; text-align: center;">
                DITOLAK
              </span>
            </td>
            <td class="text-center rounded-end">
              <button class="btn btn-primary py-1 px-4 fs-7 w-60 rounded-3" data-bs-toggle="modal"
                data-bs-target="#detailModalABC02">
                CHECK
              </button>
            </td>
          </tr>

          <!-- Modal for ABC02 -->
          <div class="modal fade" id="detailModalABC02" tabindex="-1" aria-labelledby="detailModalLabelABC02"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="detailModalLabelABC01" style="font-weight: bold; color: #223381;">Detail Pelanggaran</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <!-- Foto yang Bisa Diklik untuk Zoom -->
                    <div class="col-md-4">
                      <div class="text-center">
                        <img src="../../../../../public/img/student.jpg" alt="Bukti Zoom"
                          class="img-fluid rounded w-100" data-bs-toggle="modal" data-bs-target="#buktiZoomModalABC01"
                          style="cursor: pointer;">
                      </div>
                    </div>
                    <!-- Informasi di sebelah kanan -->
                    <div class="col-md-8">
                      <div class="mb-3">
                        <label class="form-label" style="font-weight: bold; color: #223381;">Nama Mahasiswa Terlapor</label>
                        <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">
                          Surya Rahmat
                        </p>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" style="font-weight: bold; color: #223381;">NIM Mahasiswa Terlapor</label>
                        <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">
                          2341760020
                        </p>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" style="font-weight: bold; color: #223381;">Tingkat dan Jenis Pelanggaran</label>
                        <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">
                          III - Menyontek saat ujian
                        </p>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" style="font-weight: 600px; color: #223381;">Waktu</label>
                        <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">
                          Rabu, 13 November 2024 pukul 15:00
                        </p>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" style="font-weight: 600px; color: #223381;">Lokasi</label>
                        <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">
                          Di Ruang Ujian
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-end align-items-start" style="margin-top: 8px;">
                    <button class="btn btn-primary rounded-3 me-2"
                      style="font-size: 14px; padding: 6px 12px; width: 120px; height: 40px; transform: translateY(-15px);">
                      Riwayat
                    </button>
                    <button class="btn btn-warning rounded-3 me-2"
                      style="font-size: 14px; padding: 6px 12px; width: 120px; height: 40px;">
                      Aju Banding
                    </button>
                    <button class="btn btn-success rounded-3" id="submitBtn" data-bs-toggle="modal"
                      data-bs-target="#successModal"
                      style="font-size: 14px; padding: 6px 12px; width: 120px; height: 40px;">
                      Terima
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal untuk Zoom Gambar ABC02 -->
          <div class="modal fade" id="buktiZoomModalABC02" tabindex="-1" aria-labelledby="buktiZoomModalLabelABC02"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
              <div class="modal-content">
                <div class="modal-body p-0">
                  <p
                    style="font-weight: bold; color: #223381; margin-top: 20px; margin-bottom: 0px; margin-left: 20px;">
                    Bukti Pelanggaran</p>
                  <div class="d-flex justify-content-center align-items-center">
                    <div style="padding: 20px; background-color: white; border-radius: 8px;">
                      <img src="../../../../../public/img/student.jpg" alt="Bukti Zoom" class="img-fluid rounded"
                        style="max-width: 100%; height: auto; display: block; margin: 0;">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <tr class="rounded-3">
            <td class="text-center rounded-start">ABC03</td>
            <td>Tidak Mengenakan Identitas Diri</td>
            <td class="text-center">
              <span class="badge bg-success text-white p-2 fs-7 rounded-3" style="width: 100px; text-align: center;">
                VALID
              </span>
            </td>
            <td class="text-center rounded-end">
              <button class="btn btn-primary py-1 px-4 fs-7 w-60 rounded-3" data-bs-toggle="modal"
                data-bs-target="#detailModalABC03">
                CHECK
              </button>
            </td>
          </tr>

          <!-- Modal for ABC03 -->
          <div class="modal fade" id="detailModalABC03" tabindex="-1" aria-labelledby="detailModalLabelABC03"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="detailModalLabelABC01" style= "color: #223381">Detail Pelanggaran</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <!-- Foto yang Bisa Diklik untuk Zoom -->
                    <div class="col-md-4">
                      <div class="text-center">
                        <img src="../../../../../public/img/student.jpg" alt="Bukti Zoom"
                          class="img-fluid rounded w-100" data-bs-toggle="modal" data-bs-target="#buktiZoomModalABC01"
                          style="cursor: pointer;">
                      </div>
                    </div>
                    <!-- Informasi di sebelah kanan -->
                    <div class="col-md-8">
                      <div class="mb-3">
                        <label class="form-label" style="font-weight: bold; color: #223381">Nama Mahasiswa Terlapor</label>
                        <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">
                          Surya Rahmat
                        </p>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" style="font-weight: bold; color: #223381">NIM Mahasiswa Terlapor</label>
                        <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">
                          2341760020
                        </p>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" style="font-weight: bold; color: #223381">Tingkat dan Jenis Pelanggaran</label>
                        <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">
                          I - Tidak mengenakan identitas diri
                        </p>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" style="font-weight: 600px; color: #223381;">Waktu</label>
                        <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">
                          Jumat, 15 November 2024 pukul 08:00
                        </p>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" style="font-weight: 600px; color: #223381;">Lokasi</label>
                        <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">
                          Di Area Kampus
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-end align-items-start" style="margin-top: 8px;">
                    <button class="btn btn-primary rounded-3 me-2"
                      style="font-size: 14px; padding: 6px 12px; width: 120px; height: 40px; transform: translateY(-15px);">
                      Riwayat
                    </button>
                    <button class="btn btn-warning rounded-3 me-2"
                        style="font-size: 14px; padding: 6px 12px; width: 120px; height: 40px;" data-bs-toggle="modal"
                        data-bs-target="#ajuBandingModal">
                        Aju Banding
                      </button>
                    <button class="btn btn-success rounded-3" id="submitBtn" data-bs-toggle="modal" data-bs-target="#successModal"
                      style="font-size: 14px; padding: 6px 12px; width: 120px; height: 40px;">
                      Terima
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

           <!-- Modal untuk riwayat -->
          <div class="modal fade" id="riwayatModal" tabindex="-1" aria-labelledby="riwayatModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="riwayatModalLabel" style="color: #223381; font-weight: bold">Riwayat Aju Banding</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <!-- Mahasiswa di kanan -->
                          <div class="right d-flex justify-content-end align-items-start mb-3">
                              <div class="message-bubble">
                                  <p>Pada saat itu saya hanya membawa bungkus makanan, tidak makan di kelas</p>
                              </div>
                              <div>
                                  <i class="bi bi-person-circle ms-2" style="font-size: 24px;"></i>
                              </div>
                          </div>
                         <div class="right d-flex justify-content-end align-items-start mb-3">
                              <div class="img-bubble">
                                  <img src="../../../../../public/img/student.jpg" alt="Mahasiswa" width="50" class="img-fluid rounded">
                              </div>
                              <div>
                                  <i class="bi bi-person-circle ms-2" style="font-size: 24px;"></i>
                              </div>
                          </div>
                          <!-- Dosen di kiri -->
                          <div class="left d-flex justify-content-start align-items-start mb-3">
                              <div>
                                  <i class="bi bi-person-circle me-2" style="font-size: 24px;"></i>
                              </div>
                              <div class="message-bubble">
                                  <p>Saya melihat anda makan di kelas, dan berceceran di meja!</p>
                              </div>
                          </div>
                      </div>
                      <p class="text-warning text-center mt-3">*Silahkan segera menuju ke ruang admin untuk konfirmasi penyelesaian pelanggaran</p>
                  </div>
              </div>
          </div>
          <!-- Modal untuk Zoom Gambar ABC03 -->
          <div class="modal fade" id="buktiZoomModalABC03" tabindex="-1" aria-labelledby="buktiZoomModalLabelABC03"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
              <div class="modal-content">
                <div class="modal-body p-0">
                  <p
                    style="font-weight: bold; color: #223381; margin-top: 20px; margin-bottom: 0px; margin-left: 20px;">
                    Bukti Pelanggaran</p>
                  <div class="d-flex justify-content-center align-items-center">
                    <div style="padding: 20px; background-color: white; border-radius: 8px;">
                      <img src="../../../../../public/img/student.jpg" alt="Bukti Zoom" class="img-fluid rounded"
                        style="max-width: 100%; height: auto; display: block; margin: 0;">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

    </div>
    </tbody>
    </table>
    </div>


    <footer class="footer">
      Kami Membantu Anda Menjadi Bagian dari Kampus yang Tertib dan Teratur
    </footer>

    </div>
  </main>

  <!--   Core JS Files   -->
  <script src="../../../../../public/js/core/popper.min.js"></script>
  <script src="../../../../../public/js/core/bootstrap.min.js"></script>
  <script src="../../../../../public/js/core/bootstrap.bundle.min.js"></script>
  <script src="../../../../../public/css/bootstrap.min.css"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      fetch('http://localhost/PBL/Project%20Web/app/controllers/totalViolations.php')
        .then(response => response.json())  // Parsing respons JSON dari API
        .then(data => {
          console.log(data); // Debugging data

          // Pastikan data ada
          if (data && data.total_laporan !== undefined) {
            document.getElementById('totalLaporan').innerText = data.total_laporan;
            document.getElementById('laporanSelesai').innerText = data.laporan_selesai;
            document.getElementById('laporanTertunda').innerText = data.laporan_tertunda;
          } else {
            console.error('Data tidak valid', data);
          }
        })
        .catch(error => {
          console.error('Error:', error); // Menangani error jika terjadi kesalahan
        });
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
  <script src="../../../../../public/js/argon-dashboard.min.js?v=2.1.0"></script>
</body>

</html>