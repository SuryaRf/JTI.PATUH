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
            <span class="nav-link-text ms-1">Melaporkan Pelanggaran</span>
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
              <h4 class="mb-0 text-black">Laporan Yang Diajukan</h4>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
              <!-- Filter Area -->
              <div class="mb-4">
                <h6 class="text-muted mb-3">Filter Laporan</h6>
                <div class="d-md-flex justify-content-between align-items-center gap-3">
                  <!-- Search input -->
                  <div class="flex-fill">
                    <input type="text" id="searchInput" class="form-control" placeholder="Cari berdasarkan Nama Mahasiswa Terlapor" onkeyup="filterData()">
                  </div>

                  <!-- Status dropdown -->
                  <div class="flex-fill">
                    <select id="statusFilter" class="form-select" onchange="filterData()">
                      <option value="">Pilih Status</option>
                      <option value="pending">Pending</option>
                      <option value="valid">Valid</option>
                      <option value="reject">Reject</option>
                    </select>
                  </div>

                  <!-- Date filter -->
                  <div class="flex-fill">
                    <input type="month" id="dateFilter" class="form-control" onchange="filterData()">
                  </div>
                </div>
              </div>

              <!-- Table -->
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-8">ID. Pelanggaran</th>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-8">Nama Mahasiswa Terlapor</th>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-8" style="max-width: 200px;">Nama Pelanggaran</th>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-8" style="max-width: 200px;">Waktu</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-8">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-8">Detail</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Rows will be dynamically inserted here -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
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
            <div class="d-flex justify-content-end mt-3 modal-footer"></div>
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


  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Fetch violations and display them in the table
      fetch('http://localhost/PBL/Project%20Web/app/controllers/historyViolationsPegawai.php')
        .then(response => response.json())
        .then(data => {
          if (data.error) {
            console.error('Error:', data.error);
            alert('Error: ' + data.error);
          } else {
            const tbody = document.querySelector('tbody');
            tbody.innerHTML = ''; // Clear previous rows

            // Render the rows
            function renderRows(filteredData) {
              filteredData.forEach(violation => {
                const row = document.createElement('tr');
                row.innerHTML = `
              <td class="text-center">${violation.id_pelanggaran}</td>
              <td class="text-center">${violation.nama_terlapor}</td>
              <td style="max-width: 450px; word-wrap: break-word; white-space: wrap; overflow: hidden; text-overflow: ellipsis;" title="${violation.nama_pelanggaran}">
                ${violation.nama_pelanggaran}
              </td>
              <td class="text-center">${violation.waktu_pelanggaran}</td>
              <td class="text-center">
                <span class="badge ${getBadgeClass(violation.status)} text-white">${violation.status}</span>
              </td>
              <td class="text-center rounded-end">
                <button class="btn btn-primary py-1 px-4 fs-7 w-100 rounded-3 check" 
                  data-bs-toggle="modal" data-bs-target="#detailModal" data-id="${violation.id_pelanggaran}">
                  CHECK
                </button>
              </td>
            `;
                tbody.appendChild(row);
              });
            }

            // Initial render with all data
            renderRows(data);

            // Search filter
            document.getElementById('searchInput').addEventListener('input', function() {
              const searchValue = this.value.toLowerCase();
              const filteredData = data.filter(violation =>
                violation.nama_terlapor.toLowerCase().includes(searchValue)
              );
              tbody.innerHTML = '';
              renderRows(filteredData);
            });

            // Status filter
            document.getElementById('statusFilter').addEventListener('change', function() {
              const statusValue = this.value.toLowerCase();
              const filteredData = data.filter(violation =>
                (statusValue === '' || violation.status.toLowerCase() === statusValue)
              );
              tbody.innerHTML = '';
              renderRows(filteredData);
            });

            // Date filter
            document.getElementById('dateFilter').addEventListener('change', function() {
              const dateValue = this.value;
              const filteredData = data.filter(violation =>
                !dateValue || violation.waktu_pelanggaran.startsWith(dateValue)
              );
              tbody.innerHTML = '';
              renderRows(filteredData);
            });
          }
        })
        .catch(error => {
          console.error('Fetch Error:', error);
          alert('Terjadi kesalahan saat mengambil data.');
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



      // Event listener for the CHECK button to show the modal with detailed data
      document.addEventListener('click', function(event) {
        if (event.target.classList.contains('check')) {
          const idPelanggaran = event.target.getAttribute('data-id');

          // Fetch violation details based on ID
          fetch(`http://localhost/PBL/Project%20Web/app/controllers/getViolationDetails.php?id=${idPelanggaran}`)
            .then(response => response.json())
            .then(data => {
              if (data.error) {
                alert('Terjadi kesalahan: ' + data.error);
              } else {

                // Populate modal fields
                document.getElementById('modalNamaMahasiswa').textContent = data.nama_terlapor;
                document.getElementById('modalNimMahasiswa').textContent = data.nim_terlapor;
                document.getElementById('modalTingkatJenis').textContent = `${data.tingkat_pelanggaran} - ${data.jenis_pelanggaran}`;
                document.getElementById('modalWaktu').textContent = data.waktu_pelanggaran;
                document.getElementById('modalLokasi').textContent = data.lokasi;
                document.getElementById('modalPelapor').textContent = `${data.pelapor.type}: ${data.pelapor.id} (${data.pelapor.name})`;
                document.getElementById('modalBuktiFoto').src = data.bukti_foto_url || '';

                // Update modal buttons
                const modalFooter = document.querySelector('.modal-footer');
                modalFooter.innerHTML = ''; // Clear existing buttons

                if (data.status.toLowerCase() === 'valid') {
                  const btnRiwayat = document.createElement('button');
                  btnRiwayat.className = 'btn btn-primary me-2';
                  btnRiwayat.textContent = 'Riwayat';
                  btnRiwayat.addEventListener('click', () => {
                    fetch(`http://localhost/PBL/Project%20Web/app/controllers/generatePDF.php?id=${data.id_pelanggaran}`)
                      .then(response => {
                        if (!response.ok) {
                          throw new Error('Gagal memproses permintaan: ' + response.statusText);
                        }
                        return response.json();
                      })
                      .then(result => {
                        if (result.success) {
                          alert('PDF berhasil dibuat dan dikirim.');
                        } else {
                          alert('Gagal membuat PDF: ' + (result.error || 'Tidak diketahui'));
                        }
                      })
                      .catch(error => {
                        console.error(error);
                        alert('Error: ' + error.message);
                      });
                  });


                  const btnKirim = document.createElement('button');
                  btnKirim.className = 'btn btn-success';
                  btnKirim.textContent = 'Kirim';
                  btnKirim.addEventListener('click', () => {
                    fetch(`http://localhost/PBL/Project%20Web/app/controllers/generatePDF.php?id=${data.id_pelanggaran}`)
                      .then(response => {

                        if (!response.ok) {
                          throw new Error('Gagal memproses permintaan: ' + response.statusText);
                        }
                        return response.json();
                      })
                      .then(result => {
                        if (result.success) {
                          // Tampilkan pop-up animasi SweetAlert jika sukses
                          Swal.fire({
                            title: 'Surat Pemanggilan Terkirim!',
                            text: 'Surat Pemanggilan Anda telah berhasil dikirim.',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 3000,

                          }).then(() => {
                            // Reload atau arahkan ke halaman lain jika perlu
                            window.location.href = 'history.php';
                          });
                        } else {
                          Swal.fire({
                            title: 'Surat Pemanggilan Terkirim!',
                            text: 'Surat Pemanggilan Anda telah berhasil dikirim.',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 3000,

                          }).then(() => {
                            // Reload atau arahkan ke halaman lain jika perlu
                            window.location.href = 'history.php';
                          });
                        }
                      })
                      .catch(error => {
                        console.error(error);
                        Swal.fire({
                          title: 'Error!',
                          text: 'Terjadi kesalahan: ' + error.message,
                          icon: 'error',
                          confirmButtonText: 'Tutup',
                        });
                      });
                  });

                  modalFooter.appendChild(btnRiwayat);
                  modalFooter.appendChild(btnKirim);
                } else if (data.status.toLowerCase() === 'reject') {
                  const btnClose = document.createElement('button');
                  btnClose.className = 'btn btn-secondary';
                  btnClose.textContent = 'Close';
                  btnClose.setAttribute('data-bs-dismiss', 'modal');

                  modalFooter.appendChild(btnClose);
                } else if (data.status.toLowerCase() === 'pending') {
                  const btnTolak = document.createElement('button');
                  btnTolak.className = 'btn btn-danger me-2';
                  btnTolak.textContent = 'Tolak';
                  btnTolak.addEventListener('click', () => {
                    // Logika untuk menangani tombol Tolak
                    alert('Laporan ditolak.');
                    // Tambahkan logika untuk mengirim permintaan update status ke server
                  });

                  const btnTerima = document.createElement('button');
                  btnTerima.className = 'btn btn-success';
                  btnTerima.textContent = 'Terima';
                  btnTerima.addEventListener('click', () => {
                    // Logika untuk menangani tombol Terima
                    alert('Laporan diterima.');
                    // Tambahkan logika untuk mengirim permintaan update status ke server
                  });

                  modalFooter.appendChild(btnTolak);
                  modalFooter.appendChild(btnTerima);
                }

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

  <!-- Tambahkan SweetAlert2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script src="../../../../../public/js/argon-dashboard.min.js?v=2.1.0"></script>
</body>

</html>