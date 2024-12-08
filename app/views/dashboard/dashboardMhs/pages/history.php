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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/js/all.js"></script>
  <!-- CSS Files -->
  <link id="pagestyle" href="../../../../../public/css/argon-dashboard.css?v=2.1.0" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <style>
    html,
    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif !important;
      letter-spacing: 0.3px;
    }

    .custom-header {
      font-size: 16px;
      /* Ubah sesuai kebutuhan */
      color: #223381;
      /* Warna biru dongker */
      font-weight: 600;
    }

    .modal-content,
    .modal-title,
    .form-label,
    .form-control,
    .btn {
      font-family: 'Poppins', sans-serif;
      font-size: 14px;
      font-weight: 600px;
    }

    .table,
    .text-16 {
      font-family: 'Poppins', sans-serif !important;
      font-size: 16px;
    }

    .btn-primary {
      background-color: #223381;
      border: none;
      border-radius: 12px;
      margin-top: 15px;
    }

    .badge {
      font-size: 0.875rem;
      padding: 0.5em 0.75em;
    }

    .text-sm {
      font-size: 16px;
      font-weight: normal;
    }

    .font-weight-bold,
    .nav-link-text,
    h4,
    h6 {
      font-family: 'Poppins', sans-serif !important;
    }

    .btn-primary {
      margin-top: 10px;
    }

    .footer {
      text-align: center;
      color: #9CA3AF;
      margin-top: 92px;
      padding: 16px 0;
      animation: fadeInFooter 1.5s ease;
    }

    .text-black {
      color: #000 !important;
    }

    .btn-primary:hover {
      background-color: #1a285e;
    }

    .table th,
    .table td {
      vertical-align: middle;
    }

    .card-header {
      border-bottom: 2px solid rgba(0, 0, 0, 0.1);
    }

    .btn-outline-primary:hover {
      background-color: #007bff;
      color: #fff;
    }

    .btn-outline-success:hover {
      background-color: #28a745;
      color: #fff;
    }

    .btn-outline-danger:hover {
      background-color: #dc3545;
      color: #fff;
    }

    .left,
    .right {
      display: flex;
      align-items: center;
    }

    .left .message-bubble,
    .right .message-bubble {
      max-width: 85%;
      padding: 15px;
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

    .right i,
    .left i {
      font-size: 24px;
    }

    .right .message-bubble {
      margin-left: 15px;
    }

    .left .message-bubble {
      margin-right: 15px;
    }

    .icon-user {
      color: #223381;
      /* Warna ikon user */
    }

    .left,
    .right {
      display: flex;
      align-items: center;
    }

    .left .message-bubble,
    .right .message-bubble {
      max-width: 85%;
      padding: 15px;
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

    .right i,
    .left i {
      font-size: 24px;
    }

    .right .message-bubble {
      margin-left: 15px;
    }

    .left .message-bubble {
      margin-right: 15px;
    }

    .icon-user {
      color: #223381;
      /* Warna ikon user */
    }
  </style>
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-200 position-absolute w-100" style="background-color: #223381;"></div>
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
          <a class="nav-link" href="../pages/dashboard.php">
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
            <span class="nav-link-text ms-1">Melaporkan Pelanggaran</span>
          </a>
        </li>


        <li class="nav-item">
          <a class="nav-link active" href="../pages/history.php">
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
          <h6 class="ps-4 ms-2 text-uppercase text-xs opacity-6">Account pages</h6>
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
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Riwayat Laporan</li>
          </ol>
          <h6 class="text-white mb-0">Riwayat Laporan</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4 shadow-sm border-0">
            <div class="card-header pb-3 bg-white text-navy-blue">
              <h4 class="mb-0" style="color: #223381; font-size: 20px;">LAPORAN YANG DIAJUKAN</h4>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th style="font-size: 16px; color: #223381; text-align: center; width: 25%;">ID. PELANGGARAN</th>
                      <th style="font-size: 16px; color: #223381;">NAMA PELANGGARAN</th>
                      <th style="font-size: 16px; color: #223381; text-align: center;">STATUS</th>
                      <th style="font-size: 16px; color: #223381; text-align: center;">DETAIL</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-16" style="color: #6B7280; text-align: center; font-size: 16px;">XYZ01</td>
                      <td class="text-16" style="color: #6B7280; font-size: 16px;">Bolos</td>
                      <td class="text-center">
                        <span class="badge bg-warning text-white fs-7 rounded-3"
                          style="font-weight: 600; width: 100px; text-align: center; height: 30px; line-height: 18px;">
                          TERTUNDA
                        </span>
                      </td>
                      <td class="align-middle text-center">
                        <button class="btn btn-primary py-1 px-4 fs-7 w-45 rounded-3" data-bs-toggle="modal"
                          data-bs-target="#detailModalXYZ01" style="font-weight: 600;">
                          CHECK
                        </button>
                      </td>
                    </tr> -->

                    <!-- Modal untuk XYZ01 -->
                    <div class="modal fade" id="detailModalXYZ01" tabindex="-1" aria-labelledby="detailModalLabelXYZ01"
                      aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="detailModalLabelXYZ01"
                              style="font-size: 20px; font-weight: 600; color: #223381;">Detail Pelanggaran</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <!-- Foto Bukti -->
                              <div class="col-md-4">
                                <div class="text-center">
                                  <img src="../../../../../public/img/student.jpg" alt="Bukti Pelanggaran"
                                    class="img-fluid rounded" data-bs-toggle="modal"
                                    data-bs-target="#buktiZoomModalXYZ01" style="cursor: pointer;">
                                </div>
                              </div>
                              <!-- Informasi di sebelah kanan -->
                              <div class="col-md-8">
                                <div class="mb-3">
                                  <label class="form-label" style="font-weight: 600; color: #223381;">Nama Mahasiswa
                                    Terlapor</label>
                                  <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">Fatima
                                    Sitta</p>
                                </div>
                                <div class="mb-3">
                                  <label class="form-label" style="font-weight: 600; color: #223381;">NIM Mahasiswa
                                    Terlapor</label>
                                  <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">
                                    2341760167</p>
                                </div>
                                <div class="mb-3">
                                  <label class="form-label" style="font-weight: 600; color: #223381;">Tingkat dan Jenis
                                    Pelanggaran</label>
                                  <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">IV -
                                    Bolos</p>
                                </div>
                                <div class="mb-3">
                                  <label class="form-label" style="font-weight: 600; color: #223381;">Waktu</label>
                                  <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">Kamis,
                                    14 November 2024 pukul 14:59</p>
                                </div>
                                <div class="mb-3">
                                  <label class="form-label" style="font-weight: 600; color: #223381;">Lokasi</label>
                                  <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">Di
                                    Ruang Kelas</p>
                                </div>
                              </div>
                            </div>
                            <div class="d-flex justify-content-end align-items-start" style="margin-top: 8px;">
                              <!-- Tombol Edit -->
                              <button class="btn btn-primary rounded-3 me-2" data-bs-toggle="modal"
                                data-bs-target="#editModalXYZ01"
                                style="font-weight: 600; font-size: 14px; padding: 6px 12px; width: 120px; height: 40px;">
                                Edit
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal untuk Edit XYZ01 -->
                    <div class="modal fade" id="editModalXYZ01" tabindex="-1" aria-labelledby="editModalLabelXYZ01"
                      aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabelXYZ01"
                              style="font-size: 20px; font-weight: 600; color: #223381;">Edit Detail Pelanggaran</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form>
                              <div class="mb-3">
                                <label class="form-label" style="font-weight: 600; color: #223381;">Nama Mahasiswa
                                  Terlapor</label>
                                <input type="text" class="form-control" value="Fatima Sitta" required>
                              </div>
                              <div class="mb-3">
                                <label class="form-label" style="font-weight: 600; color: #223381;">NIM Mahasiswa
                                  Terlapor</label>
                                <input type="text" class="form-control" value="2341760167" required>
                              </div>
                              <div class="mb-3">
                                <label class="form-label" style="font-weight: 600; color: #223381;">Tingkat dan Jenis
                                  Pelanggaran</label>
                                <input type="text" class="form-control" value="IV - Bolos" required>
                              </div>
                              <div class="mb-3">
                                <label class="form-label" style="font-weight: 600; color: #223381;">Waktu</label>
                                <input type="text" class="form-control" value="Kamis, 14 November 2024 pukul 14:59"
                                  required>
                              </div>
                              <div class="mb-3">
                                <label class="form-label" style="font-weight: 600; color: #223381;">Lokasi</label>
                                <input type="text" class="form-control" value="Di Ruang Kelas" required>
                              </div>
                              <div class="mb-3">
                                <label class="form-label" style="font-weight: 600; color: #223381;">Edit Foto
                                  Bukti</label>
                                <input type="file" class="form-control" accept="image/*">
                              </div>
                              <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-2"
                                  style="font-weight: 600;">Simpan</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal untuk Zoom Gambar -->
                    <div class="modal fade" id="buktiZoomModalXYZ01" tabindex="-1"
                      aria-labelledby="buktiZoomModalLabelXYZ01" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                          <div class="modal-body p-0">
                            <p
                              style="font-weight: 600; color: #223381; margin-bottom: 0px; margin-left: 20px; margin-top: 20px;">
                              Bukti Pelanggaran</p>
                            <div class="d-flex justify-content-center align-items-center">
                              <div style="padding: 20px; background-color: white; border-radius: 8px;">
                                <img src="../../../../../public/img/student.jpg" alt="Bukti Zoom"
                                  class="img-fluid rounded"
                                  style="max-width: 100%; height: auto; display: block; margin: 0;">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                   
                    <!-- Modal untuk TUV02 -->
                    <div class="modal fade" id="detailModalTUV02" tabindex="-1" aria-labelledby="detailModalLabelTUV02"
                      aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="detailModalLabelTUV02"
                              style="font-size: 20px; font-weight: 600; color: #223381;">Detail Pelanggaran</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <!-- Foto Bukti -->
                              <div class="col-md-4">
                                <div class="text-center">
                                  <img src="../../../../../public/img/student.jpg" alt="Bukti Pelanggaran"
                                    class="img-fluid rounded" data-bs-toggle="modal"
                                    data-bs-target="#buktiZoomModalTUV02" style="cursor: pointer;">
                                </div>
                              </div>
                              <!-- Informasi di sebelah kanan -->
                              <div class="col-md-8">
                                <div class="mb-3">
                                  <label class="form-label" style="font-weight: 600; color: #223381;">Nama Mahasiswa
                                    Terlapor</label>
                                  <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">Fatima
                                    Sitta</p>
                                </div>
                                <div class="mb-3">
                                  <label class="form-label" style="font-weight: 600; color: #223381;">NIM Mahasiswa
                                    Terlapor</label>
                                  <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">
                                    2341760167</p>
                                </div>
                                <div class="mb-3">
                                  <label class="form-label" style="font-weight: 600; color: #223381;">Tingkat dan Jenis
                                    Pelanggaran</label>
                                  <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">IV -
                                    Makan di Kelas</p>
                                </div>
                                <div class="mb-3">
                                  <label class="form-label" style="font-weight: 600; color: #223381;">Waktu</label>
                                  <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">Jumat,
                                    15 November 2024 pukul 08:00</p>
                                </div>
                                <div class="mb-3">
                                  <label class="form-label" style="font-weight: 600; color: #223381;">Lokasi</label>
                                  <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">Di
                                    Ruang Kelas</p>
                                </div>
                              </div>
                            </div>
                            <div class="d-flex justify-content-end align-items-start" style="margin-top: 8px;">
                              <button class="btn btn-primary rounded-3 me-2" data-bs-toggle="modal"
                                data-bs-target="#editModalTUV02"
                                style="font-weight: 600; font-size: 14px; padding: 6px 12px; width: 120px; height: 40px;">Edit</button>
                              <button class="btn btn-primary rounded-3"
                                style="font-weight: 600; font-size: 14px; padding: 6px 12px; width: 120px; height: 40px;"
                                data-bs-toggle="modal" data-bs-target="#riwayatModalTUV02">Riwayat</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Modal untuk Edit TUV02 -->
                    <div class="modal fade" id="editModalTUV02" tabindex="-1" aria-labelledby="editModalLabelTUV02"
                      aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabelTUV02"
                              style="font-size: 20px; font-weight: 600; color: #223381;">Edit Detail Pelanggaran</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form>
                              <div class="mb-3">
                                <label class="form-label" style="font-weight: 600; color: #223381;">Nama Mahasiswa
                                  Terlapor</label>
                                <input type="text" class="form-control" value="Fatima Sitta" required>
                              </div>
                              <div class="mb-3">
                                <label class="form-label" style="font-weight: 600; color: #223381;">NIM Mahasiswa
                                  Terlapor</label>
                                <input type="text" class="form-control" value="2341760167" required>
                              </div>
                              <div class="mb-3">
                                <label class="form-label" style="font-weight: 600; color: #223381;">Tingkat dan Jenis
                                  Pelanggaran</label>
                                <input type="text" class="form-control" value="IV - Makan di Kelas" required>
                              </div>
                              <div class="mb-3">
                                <label class="form-label" style="font-weight: 600; color: #223381;">Waktu</label>
                                <input type="text" class="form-control" value="Jumat, 15 November 2024 pukul 08:00"
                                  required>
                              </div>
                              <div class="mb-3">
                                <label class="form-label" style="font-weight: 600; color: #223381;">Lokasi</label>
                                <input type="text" class="form-control" value="Di Ruang Kelas" required>
                              </div>
                              <div class="mb-3">
                                <label class="form-label" style="font-weight: 600; color: #223381;">Edit Foto
                                  Bukti</label>
                                <input type="file" class="form-control" accept="image/*">
                              </div>
                              <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-2"
                                  style="font-weight: 600;">Simpan</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Modal untuk Riwayat TUV02 -->
                    <div class="modal fade" id="riwayatModalTUV02" tabindex="-1"
                      aria-labelledby="riwayatModalLabelTUV02" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content" style="padding: 20px;">
                          <div class="modal-header">
                            <h5 class="modal-title" id="riwayatModalLabelTUV02"
                              style="color: #223381; font-weight: 600; font-size: 20px;">Riwayat Aju Banding</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                              style="display: none;"></button>
                          </div>
                          <div class="modal-body" style="padding-top: 10px; padding-bottom: 10px;">
                            <!-- Konten Pesan -->
                            <div class="flex-grow-1">
                              <!-- Mahasiswa di kiri dan di atas -->
                              <div class="left d-flex justify-content-start align-items-start mb-3">
                                <div>
                                  <i class="bi bi-person-circle me-2 icon-user"
                                    style="font-size: 24px; color: #223381;"></i>
                                </div>
                                <div class="message-bubble">
                                  <p>Pada saat itu saya hanya membawa bungkus makanan, tidak makan di kelas</p>
                                </div>
                              </div>
                              <div class="left d-flex justify-content-start align-items-start mb-3">
                                <div>
                                  <i class="bi bi-person-circle me-2 icon-user"
                                    style="font-size: 24px; color: #223381;"></i>
                                </div>
                                <div class="img-bubble mb-3">
                                  <img src="../../../../../public/img/student.jpg" alt="Mahasiswa" width="350"
                                    class="img-fluid rounded-3" style="margin-left: 5px;">
                                </div>
                              </div>

                              <!-- Dosen di kanan dan di bawah -->
                              <div class="right d-flex justify-content-end align-items-start mb-3">
                                <div class="message-bubble">
                                  <p>Saya melihat anda makan di kelas, dan berceceran di meja!</p>
                                </div>
                                <div>
                                  <i class="bi bi-person-circle ms-2 icon-user"
                                    style="font-size: 24px; color: #223381;"></i>
                                </div>
                              </div>

                            </div>
                            <!-- Textbox untuk mengirim pesan -->
                            <div class="border-top pt-4">
                              <div class="input-group">
                                <label class="input-group-text" for="fileInputTUV02"
                                  style="cursor: pointer; font-size: 14px; padding: 5px; height: 40px;">
                                  <i class="fas fa-paperclip" style="font-size: 16px; padding-left: 10px;"></i>
                                </label>

                                <input type="file" class="form-control" accept="image/*" style="display: none;"
                                  id="fileInputTUV02"> <!-- Input file tetap tersembunyi -->

                                <input type="text" class="form-control" placeholder="Kirim pesan..."
                                  aria-label="Kirim pesan" style="height: 40px; padding-left: 10px;">

                                <button class="btn btn-primary" type="button"
                                  style="font-weight: 600; height: 40px; margin-top: 0px">
                                  <i class="fas fa-paper-plane"></i>
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
              </div>

              <!-- Modal untuk Zoom Gambar TUV02 -->
              <div class="modal fade" id="buktiZoomModalTUV02" tabindex="-1" aria-labelledby="buktiZoomModalLabelTUV02"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                  <div class="modal-content">
                    <div class="modal-body p-0">
                      <p
                        style="font-weight: 600; color: #223381; margin-bottom: 0px; margin-left: 20px; margin-top: 20px;">
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
              <!-- <tr>
                <td class="text-16" style="color: #6B7280; text-align: center; font-size: 16px;">QRS03</td>
                <td class="text-16" style="color: #6B7280; font-size: 16px;">Bolos</td>
                <td class="text-center">
                  <span class="badge bg-danger text-white p-2 fs-7 rounded-3"
                    style="font-weight: 600; width: 100px; text-align: center;">
                    DITOLAK
                  </span>
                </td>
                <td class="text-center">
                  <button class="btn btn-primary py-1 px-4 fs-7 w-45 rounded-3" data-bs-toggle="modal"
                    data-bs-target="#detailModalQRS03" style="font-weight: 600;">
                    CHECK
                  </button>
                </td>
              </tr> -->
              <!-- Modal untuk QRS03 -->
              <div class="modal fade" id="detailModalQRS03" tabindex="-1" aria-labelledby="detailModalLabelQRS03"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="detailModalLabelQRS03"
                        style="font-size: 20px; font-weight: 600; color: #223381;">Detail Pelanggaran</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <!-- Foto Bukti -->
                        <div class="col-md-4">
                          <div class="text-center">
                            <img src="../../../../../public/img/student.jpg" alt="Bukti Pelanggaran"
                              class="img-fluid rounded" data-bs-toggle="modal" data-bs-target="#buktiZoomModalQRS03"
                              style="cursor: pointer;">
                          </div>
                        </div>
                        <!-- Informasi di sebelah kanan -->
                        <div class="col-md-8">
                          <div class="mb-3">
                            <label class="form-label" style="font-weight: 600; color: #223381;">Nama Mahasiswa
                              Terlapor</label>
                            <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">Surya
                              Rahmat</p>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" style="font-weight: 600; color: #223381;">NIM Mahasiswa
                              Terlapor</label>
                            <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">
                              2341760020</p>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" style="font-weight: 600; color: #223381;">Tingkat dan
                              Jenis
                              Pelanggaran</label>
                            <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">I -
                              Bolos</p>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" style="font-weight: 600; color: #223381;">Waktu</label>
                            <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">
                              Kamis,
                              14 November 2024 pukul 14:59</p>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" style="font-weight: 600; color: #223381;">Lokasi</label>
                            <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">Di
                              Ruang Kelas</p>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex justify-content-end align-items-start" style="margin-top: 8px;">
                        <button class="btn btn-primary rounded-3 me-2" data-bs-toggle="modal"
                          style="font-weight: 600; font-size: 14px; padding: 6px 12px; width: 120px; height: 40px;">Tutup</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Modal untuk Zoom Gambar QRS03 -->
              <div class="modal fade ```html
<!-- Modal untuk Zoom Gambar QRS03 -->
<div class=" modal fade" id="buktiZoomModalQRS03" tabindex="-1" aria-labelledby="buktiZoomModalLabelQRS03"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                  <div class="modal-content">
                    <div class="modal-body p-0">
                      <p
                        style="font-weight: 600; color: #223381; margin-bottom: 0px; margin-left: 20px; margin-top: 20px;">
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
              </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!-- <div class="container-fluid py-0">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4 shadow-sm border-0">
            <div class="card-header pb-3 bg-white text-navy-blue">
              <h4 class="mb-0" style="color: #223381; font-size: 20px;">LAPORAN YANG DITERIMA</h4>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th style="font-size: 16px; color: #223381; text-align: center; width: 25%;">ID. PELANGGARAN</th>
                      <th style="font-size: 16px; color: #223381;">NAMA PELANGGARAN</th>
                      <th style="font-size: 16px; color: #223381; text-align: center;">STATUS</th>
                      <th style="font-size: 16px; color: #223381; text-align: center;">DETAIL</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-16" style="color: #6B7280; text-align: center; font-size: 16px;">ABC01</td>
                      <td class="text-16" style="color: #6B7280; font-size: 16px;">Merokok</td>
                      <td class="text-center">
                        <span class="badge bg-warning text-white fs-7 rounded-3"
                          style="font-weight: 600; width: 100px; text-align: center; height: 30px; line-height: 18px;">
                          TERTUNDA
                        </span>
                      </td>
                      <td class="align-middle text-center">
                        <button class="btn btn-primary py-1 px-4 fs-7 w-45 rounded-3" data-bs-toggle="modal"
                          data-bs-target="#detailModalABC01" style="font-weight: 600;">
                          CHECK
                        </button>
                      </td>
                    </tr>

                    Modal for ABC01
                    <div class="modal fade" id="detailModalABC01" tabindex="-1" aria-labelledby="detailModalLabelABC01"
                      aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="detailModalLabelABC01"
                              style="font-size: 20px; font-weight: 600px; color: #223381;">Detail Pelanggaran</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                           Foto yang Bisa Diklik untuk Zoom -->
                              <!-- <div class="col-md-4">
                                <div class="text-center">
                                  <img src="../../../../../public/img/student.jpg" alt="Bukti Zoom"
                                    class="img-fluid rounded w-100" data-bs-toggle="modal"
                                    data-bs-target="#buktiZoomModalABC01" style="cursor: pointer;">
                                </div>
                              </div> -->
                              <!-- Informasi di sebelah kanan -->
                              <!-- <div class="col-md-8">
                                <div class="mb-3">
                                  <label class="form-label" style="font-weight: 600px; color: #223381;">Nama Mahasiswa
                                    Terlapor</label>
                                  <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">
                                    Surya Rahmat
                                  </p>
                                </div>
                                <div class="mb-3">
                                  <label class="form-label" style="font-weight: 600px; color: #223381;">NIM Mahasiswa
                                    Terlapor</label>
                                  <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">
                                    2341760020
                                  </p>
                                </div>
                                <div class="mb-3">
                                  <label class="form-label" style="font-weight: 600px; color: #223381;">Tingkat dan
                                    Jenis
                                    Pelanggaran</label>
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
                            <div class="d-flex justify-content-end align-items-start" style="margin-top: 8px;"> -->
                              <!-- Tombol Aju Banding -->
                              <!-- <button class="btn btn-primary rounded-3 me-2"
                                style="font-weight: 600; font-size: 14px; padding: 6px 12px; width: 120px; height: 40px; margin-right: 10px;"
                                data-bs-toggle="modal" data-bs-target="#ajuBandingModal">
                                Aju Banding
                              </button> -->
                              <!-- Tombol Tolak -->
                              <!-- <button class="btn btn-primary rounded-3"
                                style="font-weight: 600; font-size: 14px; padding: 6px 12px; width: 120px; height: 40px; margin-right: 10px;"
                                id="submitBtn" data-bs-toggle="modal" data-bs-target="#successModal">
                                Tolak
                              </button> -->
                              <!-- Tombol Terima -->
                              <!-- <button class="btn btn-primary rounded-3"
                                style="font-weight: 600; font-size: 14px; padding: 6px 12px; width: 120px; height: 40px;"
                                id="submitBtn" data-bs-toggle="modal" data-bs-target="#successModal">
                                Terima
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> -->

                    <!-- Modal untuk Zoom Gambar -->
                    <div class="modal fade" id="buktiZoomModalABC01" tabindex="-1"
                      aria-labelledby="buktiZoomModalLabelABC01" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                          <div class="modal-body p-0">
                            <p
                              style="font-weight: 600; color: #223381; margin-bottom: 0px; margin-left: 20px; margin-top: 20px;">
                              Bukti Pelanggaran</p>
                            <div class="d-flex justify-content-center align-items-center">
                              <div style="padding: 20px; background-color: white; border-radius: 8px;">
                                <img src="../../../../../public/img/student.jpg" alt="Bukti Zoom"
                                  class="img-fluid rounded"
                                  style="max-width: 100%; height: auto; display: block; margin: 0;">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Modal untuk Aju Banding -->
                    <div class="modal fade" id="ajuBandingModal" tabindex="-1" aria-labelledby="ajuBandingModalLabel"
                      aria-hidden="true" data-bs-dismiss="modal">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="font-family: 'Poppins', sans-serif;">
                          <div class="modal-header">
                            <h4 class="modal-title" id="ajuBandingModalLabel" style="color: #223381; font-size: 20px; ">
                              AJUKAN BANDING</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <h6 style="color: #223381; font-size: 16px;">Deskripsi Aju Banding</h6>
                            <textarea class="form-control" rows="8" style="background-color: #eaecef; font-size: 14px;"
                              placeholder="Masukkan banding" required></textarea>

                            <h6 class="mt-3" style="color: #223381; font-size: 16px;">Bukti Aju Banding <span
                                style="color: #f05529; font-size: 16px;">*</span></h6>
                            <div class="border p-3 rounded bg-light mb-3 text-center"
                              style="background-color: #f0f0f0;">
                              <label for="formFile" class="d-block">
                                <img src="../../../../../public/img/upload-file.png" alt="Upload Icon"
                                  style="width: 30px; height: 30px; margin-bottom: 8px; opacity: 0.5;">
                                <span class="d-block"
                                  style="font-size: 14px; font-weight: normal; color: #6c757d;">Unggah bukti
                                  yang menguatkan Anda disini!</span>
                              </label>
                              <input class="form-control d-none" type="file" id="formFile">
                            </div>
                            <p class="text-warning mb-0" style="font-size: 14px; color: #f05529;">*tidak wajib diisi</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button"
                              style="font-weight: 600; font-size: 14px; padding: 6px 12px; width: 120px; height: 40px;"
                              class="btn btn-primary" id="submitBtn" data-bs-toggle="modal">Kirim</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Modal untuk riwayat -->
                    <div class="modal fade" id="riwayatModal" tabindex="-1" aria-labelledby="riwayatModalLabel"
                      aria-hidden="true" data-bs-dismiss="modal">
                      <div class="modal-dialog modal-dialog-centered modal-lg"
                        style="margin: 20px; margin-left: 400px;">
                        <div class="modal-content" style="padding: 20px;">
                          <div class="modal-header" style="padding-top: 10px; padding-bottom: 10px;">
                            <h5 class="modal-title" id="riwayatModalLabel" style="color: #223381; font-weight: 600; font-size: 20px;">
                              Riwayat Aju Banding</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body" style="padding-top: 10px; padding-bottom: 10px;">
                            <!-- Mahasiswa di kanan -->
                            <div class="right d-flex justify-content-end align-items-start mb-3">
                              <div class="message-bubble">
                                <p>Pada saat itu saya hanya membawa bungkus makanan, tidak makan di kelas</p>
                              </div>
                              <div>
                                <i class="bi bi-person-circle ms-2 icon-user"
                                  style="font-size: 24px; color: #223381;"></i>
                              </div>
                            </div>
                            <div class="right d-flex justify-content-end align-items-start mb-3">
                              <div class="img-bubble">
                                <img src="../../../../../public/img/student.jpg" alt="Mahasiswa" width="50"
                                  class="img-fluid rounded-3" style="margin-right: 5px;">
                              </div>
                              <div>
                                <i class="bi bi-person-circle ms-2 icon-user"
                                  style="font-size: 24px; color: #223381;"></i>
                              </div>
                            </div>
                            <!-- Dosen di kiri -->
                            <div class="left d-flex justify-content-start align-items-start mb-3">
                              <div>
                                <i class="bi bi-person-circle me-2 icon-user"
                                  style="font-size: 24px; color: #223381;"></i>
                              </div>
                              <div class="message-bubble">
                                <p>Saya melihat anda makan di kelas, dan berceceran di meja!</p>
                              </div>
                            </div>
                            <p class="text-warning text-center mt-5" style="font-size: 14px; margin-top: 100px;">
                              *Silahkan segera menuju ke ruang admin untuk konfirmasi penyelesaian pelanggaran
                            </p>
                          </div>
                          <div class="modal-footer" style="padding-top: 30px; padding-bottom: -30px;">
                            <button class="btn btn-primary rounded-3 me-2" data-bs-dismiss="modal"
                              style="font-size: 14px; font-weight: 600; padding: 6px 12px; width: 120px; height: 40px; transform: translateY(-15px);">
                              Tutup
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Modal for DEF02 -->
                    <div class="modal fade" id="detailModalDEF02" tabindex="-1" aria-labelledby="detailModalLabelDEF02"
                      aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="detailModalLabelDEF02"
                              style="font-size: 20px; font-weight: 600px; color: #223381;">Detail Pelanggaran</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <!-- Foto yang Bisa Diklik untuk Zoom -->
                              <div class="col-md-4">
                                <div class="text-center">
                                  <img src="../../../../../public/img/student.jpg" alt="Bukti Zoom"
                                    class="img-fluid rounded w-100" data-bs-toggle="modal"
                                    data-bs-target="#buktiZoomModalABC01" style="cursor: pointer;">
                                </div>
                              </div>
                              <!-- Informasi di sebelah kanan -->
                              <div class="col-md-8">
                                <div class="mb-3">
                                  <label class="form-label" style="font-weight: 600px; color: #223381;">Nama Mahasiswa
                                    Terlapor</label>
                                  <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">
                                    Surya Rahmat
                                  </p>
                                </div>
                                <div class="mb-3">
                                  <label class="form-label" style="font-weight: 600px; color: #223381;">NIM Mahasiswa
                                    Terlapor</label>
                                  <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">
                                    2341760020
                                  </p>
                                </div>
                                <div class="mb-3">
                                  <label class="form-label" style="font-weight: 600px; color: #223381;">Tingkat dan
                                    Jenis Pelanggaran</label>
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
                                <div class="mb-3">
                                  <label class="form-label fw-bold" style="color: #223381;">Download Berita
                                    Acara</label>
                                  <div class="form-control d-flex align-items-center justify-content-between"
                                    style="border: 1px solid #ced4da; border-radius: 4px; padding: 8px 12px;">
                                    <span style="font-size: 13px;">Berita Acara - ABC03</span>
                                    <button class="btn btn-primary btn-xs d-flex align-items-center px-2 py-1"
                                      onclick="downloadBeritaAcara()"
                                      style="font-size: 14px; font-weight: 600; background-color: #fff; color: #223381; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); transition: box-shadow 0.3s ease;">
                                      <i class="fas fa-download me-1" style="font-weight: 600;"></i> Unduh
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex justify-content-end align-items-start" style="margin-top: 8px;">
                            <button class="btn btn-primary rounded-3 me-2"
                              style="font-size: 14px; font-weight: 600; padding: 6px 12px; width: 120px; height: 40px; margin-top: -20px; transform: translateX(-10px);"
                              data-bs-toggle="modal" data-bs-target="#riwayatModal">
                              Riwayat
                            </button>
                          </div>


                          <tr>
                            <td class="text-16" style="color: #6B7280; text-align: center; font-size: 16px;">GHI03</td>
                            <td class="text-16" style="color: #6B7280; font-size: 16px;">Bolos</td>
                            <td class="text-center">
                              <span class="badge bg-danger text-white p-2 fs-7 rounded-3"
                                style="font-weight: 600; width: 100px; text-align: center;">
                                DITOLAK
                              </span>
                            </td>
                            <td class="text-center">
                              <button class="btn btn-primary py-1 px-4 fs-7 w-45 rounded-3" data-bs-toggle="modal"
                                data-bs-target="#detailModalGHI03" style="font-weight: 600;">
                                CHECK
                              </button>
                            </td>
                          </tr>

                          <!-- Modal for GHI03-->
                          <div class="modal fade" id="detailModalGHI03" tabindex="-1"
                            aria-labelledby="detailModalLabelGHI03" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="detailModalLabelABC01"
                                    style="font-size: 20px; font-weight: 600px; color: #223381;">Detail Pelanggaran</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <div class="row">
                                    <!-- Foto yang Bisa Diklik untuk Zoom -->
                                    <div class="col-md-4">
                                      <div class="text-center">
                                        <img src="../../../../../public/img/student.jpg" alt="Bukti Zoom"
                                          class="img-fluid rounded w-100" data-bs-toggle="modal"
                                          data-bs-target="#buktiZoomModalABC01" style="cursor: pointer;">
                                      </div>
                                    </div>
                                    <!-- Informasi di sebelah kanan -->
                                    <div class="col-md-8">
                                      <div class="mb-3">
                                        <label class="form-label" style="font-weight: 600px; color: #223381;">Nama
                                          Mahasiswa
                                          Terlapor</label>
                                        <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">
                                          Surya Rahmat
                                        </p>
                                      </div>
                                      <div class="mb-3">
                                        <label class="form-label" style="font-weight: 600px; color: #223381;">NIM
                                          Mahasiswa
                                          Terlapor</label>
                                        <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">
                                          2341760020
                                        </p>
                                      </div>
                                      <div class="mb-3">
                                        <label class="form-label" style="font-weight: 600px; color: #223381;">Tingkat
                                          dan Jenis
                                          Pelanggaran</label>
                                        <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">
                                          I - Bolos
                                        </p>
                                      </div>
                                      <div class="mb-3">
                                        <label class="form-label"
                                          style="font-weight: 600px; color: #223381;">Waktu</label>
                                        <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">
                                          Kamis, 14 November 2024 pukul 14:59
                                        </p>
                                      </div>
                                      <div class="mb-3">
                                        <label class="form-label"
                                          style="font-weight: 600px; color: #223381;">Lokasi</label>
                                        <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">
                                          Di Ruang Kelas
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="d-flex justify-content-end align-items-start" style="margin-top: 8px;">
                                    <!-- Tombol Riwayat (Sedikit diangkat) -->
                                    <button class="btn btn-primary rounded-3 me-2"
                                      style=" font-weight: 600; font-size: 14px; padding: 6px 12px; width: 120px; height: 40px; transform: translateY(-10px);"
                                      data-bs-toggle="modal">
                                      Tutup
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- Modal untuk Zoom Gambar -->
                          <div class="modal fade" id="buktiZoomModalGHI03" tabindex="-1"
                            aria-labelledby="buktiZoomModalLabelGHI03" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <div class="modal-body p-0">
                                  <p
                                    style="font-weight: 600; color: #223381; margin-bottom: 0px; margin-left: 20px; margin-top: 20px;">
                                    Bukti Pelanggaran</p>
                                  <div class="d-flex justify-content-center align-items-center">
                                    <div style="padding: 20px; background-color: white; border-radius: 8px;">
                                      <img src="../../../../../public/img/student.jpg" alt="Bukti Zoom"
                                        class="img-fluid rounded"
                                        style="max-width: 100%; height: auto; display: block; margin: 0;">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 

    <div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 shadow-sm border-0">
                <div class="card-header pb-3 bg-white text-navy-blue">
                    <h4 class="mb-0" style="color: #223381; font-size: 20px;">LAPORAN YANG DIAJUKAN</h4>
                </div>
                <div class="card-body px-4 pt-0 pb-2">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0" id="submittedReports">
                            <thead>
                                <tr>
                                    <th>ID. PELANGGARAN</th>
                                    <th>NAMA PELANGGARAN</th>
                                    <th>STATUS</th>
                                    <th>DETAIL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Data laporan yang diajukan akan ditambahkan di sini -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 shadow-sm border-0">
                <div class="card-header pb-3 bg-white text-navy-blue">
                    <h4 class="mb-0" style="color: #223381; font-size: 20px;">LAPORAN YANG DITERIMA</h4>
                </div>
                <div class="card-body px-4 pt-0 pb-2">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0" id="receivedReports">
                            <thead>
                                <tr>
                                    <th>ID. PELANGGARAN</th>
                                    <th>NAMA PELANGGARAN</th>
                                    <th>STATUS</th>
                                    <th>DETAIL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Data laporan yang diterima akan ditambahkan di sini -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <footer class="footer">
      Kami Membantu Anda Menjadi Bagian dari Kampus yang Tertib dan Teratur
    </footer>
    </div>
  </main>

  <!--   Core JS Files   -->
  <script src="../../../../../public/js/core/popper.min.js"></script>
  <script src="../../../../../public/js/core/bootstrap.min.js"></script>
  <script src="../../../../../public/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../../../../../public/js/plugins/smooth-scrollbar.min.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
    fetch("http://localhost/PBL/Project%20Web/app/controllers/getReports.php") // Ganti dengan URL yang sesuai
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                console.error(data.error);
                return;
            }

   
            // Menampilkan laporan yang diajukan
            const submittedTableBody = document.querySelector("#submittedReports tbody");
            submittedTableBody.innerHTML = ""; // Bersihkan baris yang ada
            data.submitted.forEach(report => {
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td>${report.id_pelanggaran}</td>
                    <td style="max-width: 450px; word-wrap: break-word; white-space: wrap; overflow: hidden; text-overflow: ellipsis;" title="${report.nama_pelanggaran}">
                ${report.nama_pelanggaran}
              </td>
                    <td class="text-center">
                <span class="badge ${getBadgeClass(report.status)} text-white">${report.status}</span>
              </td>
                    <td class="text-center rounded-end">
                <button class="btn btn-primary py-1 px-4 fs-7 w-50 rounded-3 check" 
                  data-bs-toggle="modal" data-bs-target="#detailModal" data-id="${report.id_pelanggaran}">
                  CHECK
                </button>
              </td>
                `;
                submittedTableBody.appendChild(row);
            });

            // Menampilkan laporan yang diterima
            const receivedTableBody = document.querySelector("#receivedReports tbody");
            receivedTableBody.innerHTML = ""; // Bersihkan baris yang ada
            data.received.forEach(report => {
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td>${report.id_pelanggaran}</td>
                      <td style="max-width: 450px; word-wrap: break-word; white-space: wrap; overflow: hidden; text-overflow: ellipsis;" title="${report.nama_pelanggaran}">
                ${report.nama_pelanggaran}
              </td>
                    <td class="text-center">
                <span class="badge ${getBadgeClass(report.status)} text-white">${report.status}</span>
              </td>
                    <td class="text-center rounded-end">
                <button class="btn btn-primary py-1 px-4 fs-7 w-50 rounded-3 check" 
                  data-bs-toggle="modal" data-bs-target="#detailModal" data-id="${report.id_pelanggaran}">
                  CHECK
                </button>
              </td>
                `;
                receivedTableBody.appendChild(row);
            });
        })
        .catch(error => console.error('Error fetching reports:', error));
});
 // Function to get badge class based on status
 function getBadgeClass(status) {
        switch (status.toLowerCase()) {
          case 'pending':
            return 'bg-warning';
          case 'valid':
            return 'bg-success';
          case 'reject':
            return 'bg-danger';
          default:
            return 'bg-secondary';
        }
      }
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