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
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
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
      font-family: 'Poppins', sans-serif;
      /* Font utama */
      letter-spacing: 0.3px;
      /* Menambahkan jarak antar huruf */
    }

    .card {
      aspect-ratio: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 0;
      /* Sudut tidak melengkung */
    }

    .footer {
      text-align: center;
      color: #9CA3AF;
      margin-top: 92px;
      padding: 16px 0;
      animation: fadeInFooter 1.5s ease;
    }

    .card-body {
      text-align: left;
      /* Pastikan teks berada di kiri */
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

    .right .message-bubble {
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

    .mb-3 label {
      font-weight: 600;
      color: #223381;
    }

    .mb-3 p {
      text-align: left;
      /* Pastikan teks dalam p selalu rata kiri */
      border: 1px solid #ced4da;
      border-radius: 4px;
      padding: 8px 12px;
      margin: 0;
    }

    .col-md-8 .mb-3 {
      margin-bottom: 20px;
    }

    .row {
      display: flex;
      justify-content: flex-start;
      /* Pastikan kolom tidak di tengah */
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
          <a class="nav-link active" href="../pages/dashboard.php">
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
                          <span class="font-weight-bold">Pengajuan Banding Diterima</span> from Pelapor
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
                          Pengajuan Banding Diterima
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
        <div class="col-xl-2 col-sm-4 mb-xl-0 mb-4">
          <div class="card shadow" style="border: 5px solid #223381; border-radius: 25px; background-color: #f7f9fc;">
            <div class="card-body p-2 d-flex align-items-center justify-content-center">
              <div class="text-center">
                <p class="text-sm mb-2 text-uppercase font-weight-bold text-dark" style="font-size: 13px !important; font-weight: 700 !important;">Total Laporan</p>
                <h5 class="font-weight-bolder" style="font-size: 45px; color: rgba(34, 51, 129, 0.8);">120</h5>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-2 col-sm-4 mb-xl-0 mb-4">
          <div class="card shadow" style="border: 5px solid #223381; border-radius: 25px; background-color: #f7f9fc;">
            <div class="card-body p-2 d-flex align-items-center justify-content-center">
              <div class="text-center">
                <p class="text-sm mb-2 text-uppercase font-weight-bold text-dark" style="font-size: 13px !important; font-weight: 700 !important;">Laporan Selesai</p>
                <h5 class="font-weight-bolder" style="font-size: 45px; color: rgba(34, 51, 129, 0.8);">70</h5>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-2 col-sm-4 mb-xl-0 mb-4">
          <div class="card shadow" style="border: 5px solid #223381; border-radius: 25px; background-color: #f7f9fc;">
            <div class="card-body p-2 d-flex align-items-center justify-content-center">
              <div class="text-center">
                <p class="text-sm mb-2 text-uppercase font-weight-bold text-dark" style="font-size: 13px !important; font-weight: 700 !important;">Laporan Tertunda</p>
                <h5 class="font-weight-bolder" style="font-size: 45px; color: rgba(34, 51, 129, 0.8);">50</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-5" style="max-width: 90%;">
      <table class="table table-striped table-hover align-middle w-100">
        <thead class="table-light">
          <tr class="rounded-3">
            <th class="text-center rounded-start">ID. Pelanggaran</th>
            <th>Nama Pelanggaran</th>
            <th class="text-center">Status</th>
            <th class="text-center rounded-end">Detail</th>
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
              <button class="btn btn-primary py-1 px-4 fs-7 w-55 rounded-3" data-bs-toggle="modal"
                data-bs-target="#detailModalXYZ01" style="font-weight: 600;">
                CHECK
              </button>
            </td>
          <tr>
            <!-- Modal untuk XYZ01 -->
            <div class="modal fade" id="detailModalXYZ01" tabindex="-1" aria-labelledby="detailModalLabelXYZ01" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="detailModalLabelXYZ01" style="font-size: 20px; font-weight: 600; color: #223381;">
                      Detail Pelanggaran
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <!-- Foto Bukti -->
                      <div class="col-md-4">
                        <div>
                          <img src="../../../../../public/img/student.jpg" alt="Bukti Pelanggaran"
                            class="img-fluid rounded" data-bs-toggle="modal"
                            data-bs-target="#buktiZoomModalXYZ01" style="cursor: pointer;">
                        </div>
                      </div>
                      <!-- Informasi di sebelah kanan -->
                      <div class="col-md-8">
                        <div class="mb-3">
                          <label class="form-label" style="font-weight: 600; color: #223381;">Nama Mahasiswa Terlapor</label>
                          <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">Fatima Sitta</p>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" style="font-weight: 600; color: #223381;">NIM Mahasiswa Terlapor</label>
                          <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">2341760167</p>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" style="font-weight: 600; color: #223381;">Tingkat dan Jenis Pelanggaran</label>
                          <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">IV - Bolos</p>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" style="font-weight: 600; color: #223381;">Waktu</label>
                          <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">
                            Kamis, 14 November 2024 pukul 14:59
                          </p>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" style="font-weight: 600; color: #223381;">Lokasi</label>
                          <p class="form-control" style="border: 1px solid #ced4da; border-radius: 4px;">Di Ruang Kelas</p>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                      <!-- Tombol Edit -->
                      <button class="btn btn-primary rounded-3 me-2" data-bs-toggle="modal" data-bs-target="#editModalXYZ01"
                        style="font-weight: 600; font-size: 14px; padding: 6px 12px; width: 120px; height: 40px;">
                        Edit
                      </button>
                    </div>
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
              style="font-weight: bold; color: #223381; margin-bottom: 0px; margin-left: 20px; margin-top: 20px;">
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
    <tr>
      <td class="text-16" style="color: #6B7280; text-align: center; font-size: 16px;">TUV02</td>
      <td class="text-16" style="color: #6B7280; font-size: 16px;">Makan di Kelas</td>
      <td class="text-center">
        <span class="badge bg-success text-white p-2 fs-7 rounded-3"
          style="font-weight: 600; width: 100px; text-align: center; height: 30px; line-height: 14px;">
          VALID
        </span>
      </td>
      <td class="align-middle text-center">
        <button class="btn btn-primary py-1 px-4 fs-7 w-55 rounded-3" data-bs-toggle="modal"
          data-bs-target="#detailModalTUV02" style="font-weight: 600;">
          CHECK
        </button>
      </td>
    </tr>
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
              style="font-weight: bold; color: #223381; margin-bottom: 0px; margin-left: 20 px; margin-top: 20px;">
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
    <tr>
      <td class="text-16" style="color: #6B7280; text-align: center; font-size: 16px;">QRS03</td>
      <td class="text-16" style="color: #6B7280; font-size: 16px;">Bolos</td>
      <td class="text-center">
        <span class="badge bg-danger text-white p-2 fs-7 rounded-3"
          style="font-weight: 600; width: 100px; text-align: center;">
          DITOLAK
        </span>
      </td>
      <td class="align-middle text-center">
        <button class="btn btn-primary py-1 px-4 fs-7 w-55 rounded-3" data-bs-toggle="modal"
          data-bs-target="#detailModalQRS03" style="font-weight: 600;">
          CHECK
        </button>
      </td>
    </tr>
    <!-- Modal untuk QRS03 -->
    <div class="modal fade " id="detailModalQRS03" tabindex="-1" aria-labelledby="detailModalLabelQRS03"
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
    <div class="modal fade" id="buktiZoomModalQRS03" tabindex="-1" aria-labelledby="buktiZoomModalLabelQRS03"
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
    </tbody>
    </table>
    </div>

    <footer class="footer mt-4 text-center">
      Kami Membantu Anda Menjadi Bagian dari Kampus yang Tertib dan Teratur
    </footer>


    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Argon Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="d-flex my-3">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>

      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="../../../../../public/js/core/popper.min.js"></script>
    <script src="../../../../../public/js/core/bootstrap.min.js"></script>

    <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../../../../../public/js/argon-dashboard.min.js?v=2.1.0"></script>
</body>

</html>