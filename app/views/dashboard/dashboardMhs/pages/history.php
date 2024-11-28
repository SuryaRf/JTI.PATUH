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
      font-weight: bold;
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
  </style>
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-200 bg-dark position-absolute w-100"></div>
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
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Tables</li>
          </ol>
          <h6 class="text-white mb-0">Tables</h6>
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
                      <th style="font-size: 16px; color: #223381; text-align: center; width: 25%;">NO. PELANGGARAN</th>
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
                    <tr>
                      <td class="text-16" style="color: #6B7280; text-align: center; font-size: 16px;">DEF02</td>
                      <td class="text-16" style="color: #6B7280; font-size: 16px;">Makan di Kelas</td>
                      <td class="text-center">
                        <span class="badge bg-success text-white p-2 fs-7 rounded-3"
                          style="font-weight: 600; width: 100px; text-align: center; height: 30px; line-height: 16px;">
                          SELESAI
                        </span>
                      </td>
                      <td class="text-center">
                        <button class="btn btn-primary py-1 px-4 fs-7 w-45 rounded-3" data-bs-toggle="modal"
                          data-bs-target="#detailModalABC01" style="font-weight: 600;">
                          CHECK
                        </button>
                      </td>
                    </tr>
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
                          data-bs-target="#detailModalABC01" style="font-weight: 600;">
                          CHECK
                        </button>
                      </td>
                    </tr>
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
              <h4 class="mb-0" style="color: #223381; font-size: 20px;">LAPORAN YANG DITERIMA</h4>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-8">No. Pelanggaran
                      </th>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-8">Nama Pelanggaran
                      </th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-8">Status
                      </th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-8">Detail
                      </th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Baris 1 -->
                    <tr>
                      <td class="text-sm font-weight-bold text-primary">ABC01</td>
                      <td class="text-sm ">Merokok</td>
                      <td class="text-center">
                        <span class="badge bg-warning text-white">Pending</span>
                      </td>
                      <td class="align-middle text-center">
                        <button class="btn btn-sm btn-outline-primary">
                          <i class="fas fa-eye me-1"></i>Check
                        </button>
                      </td>
                    </tr>
                    <!-- Baris 2 -->
                    <tr>
                      <td class="text-sm font-weight-bold text-primary">DEF02</td>
                      <td class="text-sm">Makan di Kelas</td>
                      <td class="text-center">
                        <span class="badge bg-success text-white">Approved</span>
                      </td>
                      <td class="align-middle text-center">
                        <button class="btn btn-sm btn-outline-success">
                          <i class="fas fa-check-circle me-1"></i>View
                        </button>
                      </td>
                    </tr>
                    <!-- Baris 3 -->
                    <tr>
                      <td class="text-sm font-weight-bold text-primary">GHI03</td>
                      <td class="text-sm">Bolos</td>
                      <td class="text-center">
                        <span class="badge bg-danger text-white">Rejected</span>
                      </td>
                      <td class="align-middle text-center">
                        <button class="btn btn-sm btn-outline-danger">
                          <i class="fas fa-times-circle me-1"></i>Check
                        </button>
                      </td>
                    </tr>
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