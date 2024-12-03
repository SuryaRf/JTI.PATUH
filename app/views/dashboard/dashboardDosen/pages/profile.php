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
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
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
  <div class="position-absolute w-100 min-height-300 top-0" style="background-color:#223381;">
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
    <div class="main-content position-relative max-height-vh-100 h-100">
      <!-- New Breadcrumb Navigation -->
      <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
        data-scroll="false">
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-  5">
              <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
              <li class="breadcrumb-item text-sm text-white active" aria-current="page">Profil</li>
            </ol>
            <h6 class="font-weight text-white mb-0">Profil</h6>
          </nav>
          <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            </div>
      </nav>

    </div>
    <div class="card shadow-lg mx-4 card-profile-bottom">
    </div>
    <div class="container-fluid py-4" style="margin-top: -250px">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0"
                  style="color: #223381; font-size: 20px; font-weight: 600; margin-top: -10px; margin-left: 12px;">
                  PROFIL</p>
                <button class="btn btn-primary btn-sm ms-auto py-1 px-4 fs-7 w-8 rounded-3"
                  style="margin-right: 13px; background-color: #223381; border-color: #223381; letter-spacing: 0.5px; font-size: 14px"
                  data-bs-toggle="modal" data-bs-target="#editProfileModal">
                  EDIT
                </button>

              </div>
              <hr style="border: 0.5px solid #ccc; margin-top: 10px;">
            </div>

            <div class="card-body">
              <div class="card-body p-3">WERTYUHGFagha
                <div class="row gx-4" style="align-items: center;">
                  <div class="col-auto">
                    <div class="avatar avatar-xxl position-relative">
                      <img src="../../../../../public/img/profpic.jpg" alt="profile_image"
                        class="w-100 border-radius-lg shadow-sm" style="margin-top: -45px;">
                    </div>
                  </div>
                  <div class="col-auto my-auto">
                    <div class="h-100">
                      <h5 class="mb-1"
                        style="margin-top: -45px; font-family: 'Poppins', sans-serif; font-size: 20px; color: #223381;">
                        Ahmadi Yuli
                      </h5>
                      <p class="mb-0 font-weight-bold text-sm"
                        style="font-family: 'Poppins', sans-serif; font-size: 14px">
                        Dosen 
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label"
                      style="font-family: 'Poppins', sans-serif; font-size: 20px font-weight: 600">NIDN</label>
                    <input class="form-control" type="text" style="font-family: 'Poppins', sans-serif;"
                      value="445566778">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label"
                      style="font-family: 'Poppins', sans-serif; font-size: 20px font-weight: 600">Alamat Email</label>
                    <input class="form-control" type="email" style="font-family: 'Poppins', sans-serif;"
                      value="ahmadi@polinema.ac.id">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label"
                      style="font-family: 'Poppins', sans-serif; font-size: 20px font-weight: 600">Jenis Kelamin</label>
                    <input class="form-control" type="text" style="font-family: 'Poppins', sans-serif;"
                      value="Laki - laki">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label"
                      style="font-family: 'Poppins', sans-serif; font-size: 20px font-weight: 600">No.Handphone</label>
                    <input class="form-control" type="text" style="font-family: 'Poppins', sans-serif;"
                      value="08512345678">
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <div class="row">
              <div class="col-md-6">
              <div class="form-group">
                    <label for="example-text-input" class="form-control-label"
                      style="font-family: 'Poppins', sans-serif; font-size: 20px font-weight: 600">Jurusan</label>
                    <input class="form-control" type="text" style="font-family: 'Poppins', sans-serif;"
                      value="Teknologi Informasi">
                  </div>
                </div>
    
                <div class="col-md-6">
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label"
                      style="font-family: 'Poppins', sans-serif; font-size: 20px font-weight: 600">Program Studi</label>
                    <input class="form-control" type="text" style="font-family: 'Poppins', sans-serif;"
                      value="DIV-Sistem informasi Bisnis">
                  </div>
              </div>
          </div>
          </div>
          </div>
        

        

        <footer class="footer"; style="margin-top: 10px; font-family: 'Poppins', sans-serif;">
  
          Kami Membantu Anda Menjadi Bagian dari Kampus yang Tertib dan Teratur
        </footer>
      </div>
    </div>

    <!--   Core JS Files   -->
    <script src="../../../../../public/js/core/popper.min.js"></script>
    <script src="../../../../../public/js/core/bootstrap.min.js"></script>
    <script src="../../../../../public/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../../../../../public/js/plugins/smooth-scrollbar.min.js"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../../../../../public/js/argon-dashboard.min.js?v=2.1.0"></script>

    <!-- Modal Edit Profil -->
    <div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document" style="top: 50px;">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #223381; color: white;">
            <h5 class="modal-title" id="editProfileModalLabel"
              style="font-family: 'Poppins', sans-serif; color: #FFFFFF;">Edit Profil
            </h5>
          </div>
          <div class="modal-body">
            <form>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="editNIM" class="form-control-label">NIM</label>
                    <input type="text" class="form-control" id="editNIM" value="2341760020">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="editEmail" class="form-control-label">Alamat Email</label>
                    <input type="email" class="form-control" id="editEmail" value="suryarahmatfatahillah@gmail.com">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="editGender" class="form-control-label">Jenis Kelamin</label>
                    <select class="form-control" id="editGender">
                      <option value="Laki - laki" selected>Laki - laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="editPhone" class="form-control-label">No. Handphone</label>
                    <input type="text" class="form-control" id="editPhone" value="08512345678">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="editJurusan" class="form-control-label">Jurusan</label>
                    <input type="text" class="form-control" id="editJurusan" value="Teknologi Informasi" readonly>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="editProdi" class="form-control-label">Prodi</label>
                    <input type="text" class="form-control" id="editProdi" value="D-IV Sistem Informasi Bisnis"
                      readonly>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="editKelas" class="form-control-label">Kelas</label>
                    <input type="text" class="form-control" id="editKelas" value="SIB 2D" readonly>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="editProfilePicture" class="form-control-label">Foto Profil</label>
                <input type="file" class="form-control" id="editProfilePicture" accept="image/*">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary"
              style="background-color: #223381; border-color: #223381; font-family: 'Poppins', sans-serif;">Simpan</button>
          </div>
        </div>
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="../../../../../public/js/core/popper.min.js"></script>
    <script src="../../../../../public/js/core/bootstrap.min.js"></script>
    <script src="../../../../../public/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../../../../../public/js/plugins/smooth-scrollbar.min.js"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../../../../../public/js/argon-dashboard.min.js?v=2.1.0"></script>
</body>

</html>