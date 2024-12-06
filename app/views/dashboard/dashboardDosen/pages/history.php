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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/js/all.js"></script>
  <!-- CSS Files -->
  <link id="pagestyle" href="../../../../../public/css/argon-dashboard.css?v=2.1.0" rel="stylesheet" />

  <style>
    .btn-primary{
      margin-top: 10px;
    }
    .footer {
    text-align: center;
    color: #9CA3AF;
    margin-top: 92px;
    padding: 16px 0;
    animation: fadeInFooter 1.5s ease;
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
<div class="min-height-200 position-absolute w-100" style="background-color: #223381;"></div>
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
            <span class="nav-link-text ms-1">Laporkan</span>
          </a>
        </li>


        <li class="nav-item">
          <a class="nav-link active" href="../pages/history.php">
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
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Tables</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Tables</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">

          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
              </a>
            </li>
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
    <div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4 shadow-sm border-0">
        <div class="card-header pb-3 bg-white text-black">
          <h4 class="mb-0" style="color: #223381; font-size: 20px;">
          LAPORAN YANG DIAJUKAN</h4>
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
                <!-- Baris 1 -->
                <tr>
                  <td class="text-sm font-weight-bold text-primary">ABC01</td>
                  <td class="text-sm">Merokok</td>
                  <td class="text-center">
                    <span class="badge bg-warning text-white">Tertunda</span>
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
                    <span class="badge bg-success text-white">Selesai</span>
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
                    <span class="badge bg-danger text-white">Ditolak</span>
                  </td>
                  <td class="align-middle text-center">
                    <button class="btn btn-sm btn-outline-danger">
                      <i class="fas fa-times-circle me-1"></i>Check
                    </button>
                  </td>
                </tr>
                 <!-- Baris 4 -->
                 <tr>
                  <td class="text-sm font-weight-bold text-primary">JKL04</td>
                  <td class="text-sm">Merokok</td>
                  <td class="text-center">
                    <span class="badge bg-warning text-white">Tertunda</span>
                  </td>
                  <td class="align-middle text-center">
                    <button class="btn btn-sm btn-outline-primary">
                      <i class="fas fa-eye me-1"></i>Check
                    </button>
                  </td>
                </tr>
                <!-- Baris 5 -->
                <tr>
                  <td class="text-sm font-weight-bold text-primary">MNO05</td>
                  <td class="text-sm">Makan di Kelas</td>
                  <td class="text-center">
                    <span class="badge bg-success text-white">Selesai</span>
                  </td>
                  <td class="align-middle text-center">
                    <button class="btn btn-sm btn-outline-success">
                      <i class="fas fa-check-circle me-1"></i>View
                    </button>
                  </td>
                </tr>
                <!-- Baris 6 -->
                <tr>
                  <td class="text-sm font-weight-bold text-primary">PQR06</td>
                  <td class="text-sm">Bolos</td>
                  <td class="text-center">
                    <span class="badge bg-danger text-white">Selesai</span>
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