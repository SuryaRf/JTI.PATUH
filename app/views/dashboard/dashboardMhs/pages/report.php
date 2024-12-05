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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <style>
    html,
    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif !important;
      letter-spacing: 0.3px;
    }

    .input-group {
      position: relative;
    }

    .input-group .form-control {
      border-radius: 0.5rem;
      /* Sesuaikan dengan desain Anda */
      padding-right: 40px;
      /* Beri ruang untuk ikon */
    }

    .input-group .input-group-append {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      pointer-events: none;
      /* Agar tidak mengganggu interaksi */
      z-index: 10;
    }

    .input-group-append .input-group-text {
      background: transparent !important;
      border: none !important;
      color: #223381;
    }

    /* Pastikan select memiliki padding yang cukup di sisi kanan */
    select.form-control {
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      padding-right: 40px;
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
          <a class="nav-link active" href="../pages/report.php">
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
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder"
            style="color: rgba(77, 90, 123, 0.6); font-size: 16px;">Account pages</h6>
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
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Laporkan</li>
          </ol>
          <h6 class="font-weight: 600; text-white mb-0">Laporkan</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">

          </div>
          <ul class="navbar-nav  justify-content-end">
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-2">
      <div class="row justify-content-center">
        <!-- Card for the Report Form -->
        <div class="col-md-8 mt-3">
          <div class="card shadow-lg rounded-lg border-0">
            <div class="card-header"
              style="background-color: #FFFFFF; color: #223381; text-align: center; padding: 1rem;">
              <h6 style="color: #223381; font-size: 20px; font-weight: bold;">Melaporkan Pelanggaran</h6>
              <small style="color: #223381; font-size: 16px; font-weight: 600;">Form Laporan</small>
              <hr style="border: 1px solid #888; width: 100%; margin-top: 30px auto;">
            </div>
            <style>
              body {
                font-family: 'Poppins', sans-serif !important;
              }

              .form-control,
              .btn,
              .file-upload {
                font-family: 'Poppins', sans-serif !important;
              }
            </style>
            </head>

            <body>
              <div class="card-body p-4" style="margin-top: -40px;">
                <form>
                  <div class="form-group mb-3">
                    <label for="nim"
                      style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #223381;">Mahasiswa
                      Terlapor</label>
                    <input type="text" id="nim" class="form-control rounded-2" placeholder="Masukkan NIM mahasiswa"
                      required>
                  </div>
                  <div class="form-group mb-3">
                    <label for="pelanggaran"
                      style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #223381;">Nama
                      Pelanggaran</label>
                    <div class="form-group mb-3">
                      <div class="form-group mb-3">
                        <div class="input-group" style="position: relative;">
                          <select id="pelanggaran" class="form-control rounded-2"
                            style="padding-right: 35px; appearance: none; border: 1px solid #ccc; position: relative; z-index: 2; color: #aaa; background-color: #fff;"
                            onchange="changeColor(this)">
                            <option value="" style="color: #999;">Pilih Pelanggaran</option>
                            <option value="A" style="color: #222;">Pelanggaran A</option>
                            <option value="B" style="color: #222;">Pelanggaran B</option>
                          </select>
                          <div
                            style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%); z-index: 3;">
                            <i class="fas fa-angle-down" style="color: #223381; font-size: 16px;"></i>
                          </div>
                        </div>
                      </div>

                      <script>
                        function changeColor(selectElement) {
                          if (selectElement.value) {
                            selectElement.style.color = '#222'; // Mengubah warna teks menjadi gelap
                          } else {
                            selectElement.style.color = '#ccc'; // Mengembalikan warna teks menjadi samar jika tidak ada pilihan
                          }
                        }
                      </script>

                    </div>
                  </div>
                  <div class="form-group mb-3">
                    <label for="waktu"
                      style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #223381;">Waktu</label>
                    <input style="color: #aaa" type="datetime-local" id="waktu" name="waktu_pelanggaran" class="form-control rounded-2" placeholder="Pilih Waktu Kejadian"
                      required onchange="changeColor(this)">
                      <script>
                        function changeColor(selectElement) {
                          if (selectElement.value) {
                            selectElement.style.color = '#222'; // Mengubah warna teks menjadi gelap
                          } else {
                            selectElement.style.color = '#ccc'; // Mengembalikan warna teks menjadi samar jika tidak ada pilihan
                          }
                        }
                      </script>
                  </div>
                  <div class="form-group mb-3">
                    <label for="lokasi"
                      style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #223381;">Lokasi</label>
                    <input type="text" id="lokasi" class="form-control rounded-2" placeholder="Masukkan Lokasi Kejadian"
                      required>
                  </div>
                  <div class="form-group mb-3">
                    <label for="bukti"
                      style="font-family: 'Poppins', sans-serif; font-size: 14px; color: #223381;">Bukti</label>
                    <input type="file" id="bukti" class="form-control rounded-2" accept="image/*"
                      onchange="displayFileName(this)" required>
                    <small id="fileName" class="form-text text-muted" style="margin-top: 5px;"></small>
                  </div>

                  <script>
                    function displayFileName(input) {
                      const fileName = input.files[0] ? input.files[0].name : '';
                      document.getElementById('fileName').textContent = fileName;
                    }
                  </script>
                  <div class="form-footer text-center mt-4">
                    <button class="btn btn-primary rounded-3 me-2" data-bs-dismiss="modal"
                      style="font-size: 14px; font-weight: 600; padding: 6px 12px; width: 120px; height: 40px; transform: translateY(-5px);">
                      Kirim
                    </button>
                  </div>
                </form>
              </div>
          </div>
          <footer class="footer" style="margin-top: 50px;">
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
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../../../../../public/js/argon-dashboard.min.js?v=2.1.0"></script>
</body>

</html>