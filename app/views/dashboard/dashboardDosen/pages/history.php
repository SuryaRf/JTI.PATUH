<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../../../../../public/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../../../../public/img/favicon.png">
  <title>
    Dashboard Dosen
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
    .text-16 {
      font-family: 'Poppins', sans-serif;
    }

    html,
    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif !important;
      letter-spacing: 0.3px;
    }

    .form-label {
      font-family: 'Poppins', sans-serif;
      color: #223381;
      font-size: 14px;
      font-weight: 600px;
    }

    .form-control {
      font-family: 'Poppins', sans-serif;
      font-size: 14px;
      font-weight: 600px;
    }

    .modal-dialog {
      font-family: 'Poppins', sans-serif;
      font-size: 14px;
      font-weight: 600px;
    }

    .btn {
      font-family: 'Poppins', sans-serif;
      font-size: 14px;
      font-weight: 600px;
    }

    .btn-primary {
      background-color: #223381;
      border: none;
      border-radius: 12px;
      margin-top: 15px;
    }

    .footer {
      text-align: center;
      color: #9CA3AF;
      margin-top: 92px;
      padding: 16px 0;
      animation: fadeInFooter 1.5s ease;
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
            <span class="nav-link-text ms-1">Laporkan</span>
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
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Riwayat Laporan</li>
          </ol>
          <h6 class="font-weight: 600; text-white mb-0">Riwayat Laporan</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
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
                    <!-- Baris 1 -->
                    <tr>
                      <td class="text-16" style="color: #6B7280; text-align: center; font-size: 16px;">ABC01</td>
                      <td class="text-16" style="color: #6B7280; font-size: 16px;">Merokok</td>
                      <td class="text-center">
                        <span class="badge bg-warning text-white fs-7 rounded-3"
                          style="font-size: 14px; font-weight: 600; width: 100px; text-align: center; height: 30px; line-height: 18px; padding-top: 7px; padding-left: 10px;">
                          TERTUNDA
                        </span>
                      </td>
                      <td class="align-middle text-center">
                        <button class="btn btn-primary py-1 px-4 fs-7 w-50 rounded-3" data-bs-toggle="modal"
                          data-bs-target="#detailModalABC01" style="font-weight: 600;"
                          style="background-color: #223381;">
                          CHECK
                        </button>
                      </td>
                    </tr>

                    <!-- Modal untuk ABC01 -->
                    <div class="modal fade" id="detailModalABC01" tabindex="-1" aria-labelledby="detailModalLabelABC01"
                      aria-hidden="true" style="font-family: 'Poppins', sans-serif">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="detailModalLabelABC01"
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
                                    data-bs-target="#buktiZoomModalABC01" style="cursor: pointer;">
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
                                data-bs-target="#editModalABC01"
                                style="font-weight: 600; font-size: 14px; padding: 6px 12px; width: 120px; height: 40px;">
                                Edit
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal untuk Edit ABC01 -->
                    <div class="modal fade" id="editModalABC01" tabindex="-1" aria-labelledby="editModalLabelABC01"
                      aria-hidden="true" style="font-family: 'Poppins', sans-serif">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabelABC01"
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
                    <div class="modal fade" id="buktiZoomModalABC01" tabindex="-1"
                      aria-labelledby="buktiZoomModalLabelABC01" aria-hidden="true"
                      style="font-family: 'Poppins', sans-serif">
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

                    <!-- Baris 2 -->
                    <tr>
                      <td class="text-16" style="color: #6B7280; text-align: center; font-size: 16px;">DEF02</td>
                      <td class="text-16" style="color: #6B7280; font-size: 16px;">Makan di Kelas</td>
                      <td class="text-center">
                        <span class="badge bg-success text-white fs-7 rounded-3"
                          style="font-size: 14px; font-weight: 600; width: 100px; text-align: center; height: 30px; line-height: 18px; padding-top: 7px;">
                          VALID
                        </span>
                      </td>
                      <td class="align-middle text-center">
                        <button class="btn btn-primary py-1 px-4 fs-7 w-50 rounded-3" data-bs-toggle="modal"
                          data-bs-target="#detailModalDEF02" style="font-weight: 600;"
                          style="background-color: #223381;">
                          CHECK
                        </button>
                      </td>
                    </tr>

                    <!-- Modal untuk DEF02 -->
                    <div class="modal fade" id="detailModalDEF02" tabindex="-1" aria-labelledby="detailModalLabelDEF02"
                      aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="detailModalLabelDEF02"
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
                                    data-bs-target="#buktiZoomModalDEF02" style="cursor: pointer;">
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
                                data-bs-target="#editModalDEF02"
                                style="font-weight: 600; font-size: 14px; padding: 6px 12px; width: 120px; height: 40px;">Edit</button>
                              <button class="btn btn-primary rounded-3"
                                style="font-weight: 600; font-size: 14px; padding: 6px 12px; width: 120px; height: 40px;"
                                data-bs-toggle="modal" data-bs-target="#riwayatModalDEF02">Riwayat</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Modal untuk Edit DEF02 -->
                    <div class="modal fade" id="editModalDEF02" tabindex="-1" aria-labelledby="editModalLabelDEF02"
                      aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabelDEF02"
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

                    <!-- Modal untuk Riwayat DEF02 -->
                    <div class="modal fade" id="riwayatModalDEF02" tabindex="-1"
                      aria-labelledby="riwayatModalLabelDEF02" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content" style="padding: 20px;">
                          <div class="modal-header">
                            <h5 class="modal-title" id="riwayatModalLabelDEF02"
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
                                <label class="input-group-text" for="fileInputDEF02"
                                  style="cursor: pointer; font-size: 14px; padding: 5px; height: 40px;">
                                  <i class="fas fa-paperclip" style="font-size: 16px; padding-left: 10px;"></i>
                                </label>

                                <input type="file" class="form-control" accept="image/*" style="display: none;"
                                  id="fileInputDEF02"> <!-- Input file tetap tersembunyi -->

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

              <!-- Modal untuk Zoom Gambar DEF02 -->
              <div class="modal fade" id="buktiZoomModalDEF02" tabindex="-1" aria-labelledby="buktiZoomModalLabelDEF02"
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

              <!-- Baris 3 -->
              <tr>
                <td class="text-16" style="color: #6B7280; text-align: center; font-size: 16px;">GHI03</td>
                <td class="text-16" style="color: #6B7280; font-size: 16px;">Bolos</td>
                <td class="text-center">
                  <span class="badge bg-danger text-white fs-7 rounded-3"
                    style="font-size: 14px; font-weight: 600; width: 100px; height: 30px; text-align: center; padding-top: 9px;">
                    DITOLAK
                  </span>
                </td>
                <td class="align-middle text-center">
                  <button class="btn btn-primary py-1 px-4 fs-7 w-50 rounded-3" data-bs-toggle="modal"
                    data-bs-target="#detailModalGHI03" style="font-weight: 600;" style="background-color: #223381;">
                    CHECK
                  </button>
                </td>
              </tr>
              <!-- Modal untuk GHI03 -->
              <div class="modal fade" id="detailModalGHI03" tabindex="-1" aria-labelledby="detailModalLabelGHI03"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="detailModalLabelGHI03"
                        style="font-size: 20px; font-weight: 600; color: #223381;">Detail Pelanggaran</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <!-- Foto Bukti -->
                        <div class="col-md-4">
                          <div class="text-center">
                            <img src="../../../../../public/img/student.jpg" alt="Bukti Pelanggaran"
                              class="img-fluid rounded" data-bs-toggle="modal" data-bs-target="#buktiZoomModalGHI03"
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

              <!-- Modal untuk Zoom Gambar GHI03 -->
              <div class=" modal fade" id="buktiZoomModalGHI03" tabindex="-1" aria-labelledby="buktiZoomModalLabelGHI03"
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

        <footer class="footer" style="margin-top: 15px;">
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