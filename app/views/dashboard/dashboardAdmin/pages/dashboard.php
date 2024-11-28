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
  </style>
</head>

<body class="g-sidenav-show bg-gray-100" style="min-height: 100vh;">
  <div class="min-height-200 bg-dark position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main" style="height: 100vh;">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.php " target="_blank">
        <img src="/PBL/Project%20Web/public/svg/logo.svg" width="170px" height="170px" class="navbar-brand-img h-100" alt="main_logo">
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main" style="height: calc(100vh - 220px);">
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
                          <span class="font-weight-bold">Banding Diajukan</span> oleh Mahasiswa
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
                          <span class="font-weight-bold">Pengajuan Laporan Ditolak</span> by Mahasiswa
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
                          100 Pengajuan Baru
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
                <p class="text-sm mb-2 text-uppercase font-weight-bold text-dark" style="font-size: 13px !important; font-weight: 700 !important;">
                  Total Laporan
                </p>
                <h5 id="totalLaporan" class="font-weight-bolder" style="font-size: 45px; color: rgba(34, 51, 129, 0.8);">
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
                <p class="text-sm mb-2 text-uppercase font-weight-bold text-dark" style="font-size: 13px !important; font-weight: 700 !important;">
                  Laporan Selesai
                </p>
                <h5 id="laporanSelesai" class="font-weight-bolder" style="font-size: 45px; color: rgba(34, 51, 129, 0.8);">
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
                <p class="text-sm mb-2 text-uppercase font-weight-bold text-dark" style="font-size: 13px !important; font-weight: 700 !important;">
                  Laporan Tertunda
                </p>
                <h5 id="laporanTertunda" class="font-weight-bolder" style="font-size: 45px; color: rgba(34, 51, 129, 0.8);">
                  Loading...
                </h5>
              </div>
            </div>
          </div>
        </div>

        <!-- Box 4 -->
        <div class="col-xl-2 col-sm-4 mb-xl-0 mb-4">
          <div class="card shadow" style="border: 5px solid #223381; border-radius: 25px; background-color: #f7f9fc;">
            <div class="card-body p-2 d-flex align-items-center justify-content-center">
              <div class="text-center">
                <p class="text-sm mb-2 text-uppercase font-weight-bold text-dark" style="font-size: 13px !important; font-weight: 700 !important;">
                  Laporan Tertolak
                </p>
                <h5 id="laporanTertolak" class="font-weight-bolder" style="font-size: 45px; color: rgba(34, 51, 129, 0.8);">
                  Loading...
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-5" style="max-width: 1400px;">
      <table class="table table-striped table-hover align-middle">
        <thead class="table-light">
          <tr>
            <th class="text-center">No. Pelanggaran</th>
            <th>Nama Pelanggaran</th>
            <th class="text-center">Status</th>
            <th class="text-center">Detail</th>
          </tr>
        </thead>
        <tbody>
          <!-- Data pelanggaran akan dimuat disini oleh JavaScript -->
        </tbody>
      </table>
    </div>
    <!-- Modal untuk detail pelanggaran -->
    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="detailModalLabel">Detail Pelanggaran</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-4 text-center">
                <img id="modalBuktiFoto" src="" alt="Bukti Foto" class="img-fluid rounded w-100" style="cursor: pointer;">
              </div>
              <div class="col-md-8">
                <div class="mb-3">
                  <label class="form-label" style="font-weight: bold;">Nama Mahasiswa Terlapor</label>
                  <p id="modalNamaMahasiswa" class="form-control"></p>
                </div>
                <div class="mb-3">
                  <label class="form-label" style="font-weight: bold;">NIM Mahasiswa Terlapor</label>
                  <p id="modalNimMahasiswa" class="form-control"></p>
                </div>
                <div class="mb-3">
                  <label class="form-label" style="font-weight: bold;">Tingkat dan Jenis Pelanggaran</label>
                  <p id="modalTingkatJenis" class="form-control"></p>
                </div>
                <div class="mb-3">
                  <label class="form-label" style="font-weight: bold;">Waktu</label>
                  <p id="modalWaktu" class="form-control"></p>
                </div>
                <div class="mb-3">
                  <label class="form-label" style="font-weight: bold;">Lokasi</label>
                  <p id="modalLokasi" class="form-control"></p>
                </div>
                <div class="mb-3">
                  <label class="form-label" style="font-weight: bold;">Pelapor</label>
                  <p id="modalPelapor" class="form-control"></p>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-end mt-3">

              <button class="btn btn-danger me-2">Tolak</button>
              <button class="btn btn-success">Terima</button>
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

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      fetch('http://localhost/PBL/Project%20Web/app/controllers/totalViolationsPegawai.php')
        .then(response => response.json())
        .then(data => {
          if (data.error) {
            console.error('Error:', data.error);
            alert('Error: ' + data.error);
          } else {
            document.getElementById('totalLaporan').innerText = data.total_laporan ?? '0';
            document.getElementById('laporanSelesai').innerText = data.laporan_selesai ?? '0';
            document.getElementById('laporanTertunda').innerText = data.laporan_tertunda ?? '0';
            document.getElementById('laporanTertolak').innerText = data.laporan_tertolak ?? '0';
          }
        })
        .catch(error => {
          console.error('Fetch Error:', error);
          alert('Terjadi kesalahan saat mengambil data.');
        });
    });
  </script>
  <!-- JavaScript untuk menangani tombol "CHECK" -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      fetch('http://localhost/PBL/Project%20Web/app/controllers/recentViolationsPegawai.php')
        .then(response => response.json())
        .then(data => {
          if (data.error) {
            console.error('Error:', data.error);
            alert('Error: ' + data.error);
          } else {
            // Mengisi data pelanggaran ke dalam tabel
            const tbody = document.querySelector('tbody');
            tbody.innerHTML = ''; // Menghapus baris tabel yang lama

            data.forEach(violation => {
              const row = document.createElement('tr');
              row.innerHTML = `
            <td class="text-center">${violation.id_pelanggaran}</td>
            <td style="word-wrap: break-word; white-space: normal;">${violation.nama_pelanggaran}</td>
            <td class="text-center"><span class="badge bg-warning text-white p-2 fs-7 rounded-3"
                style="width: 100px; text-align: center;">${violation.status}</span></td>
            <td class="text-center rounded-end">
              <button class="btn btn-primary py-1 px-4 fs-7 w-100 rounded-3 check" 
                      data-bs-toggle="modal"
                      data-bs-target="#detailModal"
                      data-id="${violation.id_pelanggaran}">CHECK</button>
            </td>
          `;
              tbody.appendChild(row);
            });
          }
        })
        .catch(error => {
          console.error('Fetch Error:', error);
          alert('Terjadi kesalahan saat mengambil data.');
        });
    });


    // Event listener untuk menangani klik pada tombol "CHECK"
    document.addEventListener('DOMContentLoaded', function() {
      document.addEventListener('click', function(event) {
        if (event.target.classList.contains('check')) {
          const idPelanggaran = event.target.getAttribute('data-id');

          if (isNaN(idPelanggaran)) {
            alert('ID Pelanggaran tidak valid.');
            return;
          }

          fetch(`http://localhost/PBL/Project%20Web/app/controllers/getViolationDetails.php?id=${idPelanggaran}`)
            .then(response => response.json())
            .then(data => {
              if (data.error) {
                alert('Terjadi kesalahan: ' + data.error);
              } else {
                document.getElementById('modalNamaMahasiswa').textContent = data.nama_terlapor;
                document.getElementById('modalNimMahasiswa').textContent = data.nim_terlapor;
                document.getElementById('modalTingkatJenis').textContent = `${data.tingkat_pelanggaran} - ${data.jenis_pelanggaran}`;
                document.getElementById('modalWaktu').textContent = data.waktu_pelanggaran;
                document.getElementById('modalLokasi').textContent = data.lokasi;

                if (data.pelapor) {
                  document.getElementById('modalPelapor').textContent = `${data.pelapor.type}: ${data.pelapor.id} (${data.pelapor.name})`;
                } else {
                  document.getElementById('modalPelapor').textContent = 'Tidak ada pelapor.';
                }

                const modalBuktiFoto = document.getElementById('modalBuktiFoto');
                if (data.bukti_foto_url) {
                  modalBuktiFoto.src = data.bukti_foto_url;
                  modalBuktiFoto.style.display = 'block';
                } else {
                  modalBuktiFoto.src = '';
                  modalBuktiFoto.style.display = 'none';
                }

                const detailModal = new bootstrap.Modal(document.getElementById('detailModal'));
                detailModal.show();
              }
            })
            .catch(error => {
              console.error('Fetch Error:', error);
              alert('Terjadi kesalahan saat mengambil detail laporan.');
            });
        }
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
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../../../../../public/js/argon-dashboard.min.js?v=2.1.0"></script>
</body>

</html>