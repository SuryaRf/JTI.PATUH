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

    .table th,
    .table td {
      text-align: center;
      /* Menyelaraskan teks di tengah */
    }

    .table th {
      width: 15%;
      /* Lebar untuk ID. Pelanggaran */
    }

    .table td:nth-child(2) {
      width: 40%;
      /* Lebar untuk Nama Pelanggaran */
    }

    .table td:nth-child(3) {
      width: 20%;
      /* Lebar untuk Status */
    }

    .table td:nth-child(4) {
      width: 15%;
      /* Lebar untuk Detail */
    }

    .table td:nth-child(5) {
      width: 10%;
      /* Lebar untuk Aksi */
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

    .btn-primary:hover {
      background-color: #1a285e;
    }

    input {
      width: 100%;
      padding: 10px 15px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 8px;
      box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
      transition: border-color 0.3s, box-shadow 0.3s;
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
            <span class="nav-link-text ms-1">Melaporkan Pelanggaran</span>
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
      </div>
    </div>

    <div class="container mt-5" style="max-width: 90%;">
      <table class="table table-striped table-hover align-middle w-100" style="table-layout: fixed;">
        <thead class="table-light">
          <tr class="rounded-3">
            <th class="text-center rounded-start" style="width: 15%;">ID. Pelanggaran</th>
            <th style="width: 40%;">Nama Pelanggaran</th>
            <th class="text-center" style="width: 20%;">Status</th>
            <th class="text-center" style="width: 15%;">Detail</th>
            <th class="text-center rounded-end" style="width: 10%;">Aksi</th>
          </tr>
        </thead>
        <tbody>
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

              <button class="btn btn-danger me-2 btn-lg">Batalkan Laporan</button>
              <button class="btn btn-primary btn-lg">Aju Banding</button>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Modal untuk Edit-->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editModalLabel" style="font-size: 20px; font-weight: 600; color: #223381;">
              Edit Detail Pelanggaran
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="editForm">
              <div class="mb-3">
                <label class="form-label" style="font-weight: 600; color: #223381;">Nama Mahasiswa Terlapor</label>
                <input type="text" id="editNamaMahasiswa" name="nama_terlapor" placeholder="Nama Mahasiswa">
              </div>
              <div class="mb-3">
                <label class="form-label" style="font-weight: 600; color: #223381;">NIM Mahasiswa Terlapor</label>
                <input type="text" id="editNimMahasiswa" name="nim_terlapor" placeholder="NIM Mahasiswa">
              </div>
              <div class="mb-3">
                <label class="form-label" style="font-weight: 600; color: #223381;">Tingkat dan Jenis Pelanggaran</label>
                <input type="text" id="editTingkatJenis" name="jenis_pelanggaran" placeholder="Jenis Pelanggaran">
              </div>
              <div class="mb-3">
                <label class="form-label" style="font-weight: 600; color: #223381;">Waktu</label>
                <input type="datetime-local" id="editWaktu" name="waktu_pelanggaran">
              </div>
              <div class="mb-3">
                <label class="form-label" style="font-weight: 600; color: #223381;">Lokasi</label>
                <input type="text" id="editLokasi" name="lokasi" placeholder="Lokasi">
              </div>
              <div class="mb-3">
                <label class="form-label" style="font-weight: 600; color: #223381;">Edit Foto Bukti</label>
                <input type="file" class="form-control" id="editBuktiFoto" accept="image/*">
              </div>
              <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary me-2" style="font-weight: 600;">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <footer class="footer mt-4 text-center">
      Kami Membantu Anda Menjadi Bagian dari Kampus yang Tertib dan Teratur
    </footer>


    </div>
  </main>

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
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      fetch('http://localhost/PBL/Project%20Web/app/controllers/totalViolationsDosen.php')
        .then(response => response.json())
        .then(data => {
          if (data.error) {
            console.error('Error:', data.error);
            alert('Error: ' + data.error);
          } else {
            document.getElementById('totalLaporan').innerText = data.total_laporan ?? '0';
            document.getElementById('laporanSelesai').innerText = data.laporan_selesai ?? '0';
            document.getElementById('laporanTertunda').innerText = data.laporan_tertunda ?? '0';
          }
        })
        .catch(error => {
          console.error('Fetch Error:', error);
          alert('Terjadi kesalahan saat mengambil data.');
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
      fetch('http://localhost/PBL/Project%20Web/app/controllers/recentViolationsDosen.php')
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
    <td class="text-center">
      <span class="badge bg-warning text-white p-2 fs-7 rounded-3" style="width: 100px; text-align: center;">
        ${violation.status}
      </span>
    </td>
    <td class="text-center rounded-end">
      <div class="d-flex justify-content-center gap-2">
        <button class="btn btn-primary py-1 px-4 fs-7 rounded-3 check" 
                data-bs-toggle="modal"
                data-bs-target="#detailModal"
                data-id="${violation.id_pelanggaran}">
          CHECK
        </button>
        <button class="btn btn-success py-1 px-4 fs-7 rounded-3 edit" 
                data-bs-toggle="modal"
                data-bs-target="#editModal"
                data-id="${violation.id_pelanggaran}">
          EDIT
        </button>
      </div>
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

    document.addEventListener('click', function(event) {
      if (event.target.classList.contains('edit')) {
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
              document.getElementById('editNamaMahasiswa').value = data.nama_terlapor;
              document.getElementById('editNimMahasiswa').value = data.nim_terlapor;
              document.getElementById('editTingkatJenis').value = `${data.tingkat_pelanggaran} - ${data.jenis_pelanggaran}`;
              document.getElementById('editWaktu').value = data.waktu_pelanggaran;
              document.getElementById('editLokasi').value = data.lokasi;

              // Reset input file untuk foto bukti
              document.getElementById('editBuktiFoto').value = '';
            }
          })
          .catch(error => {
            console.error('Fetch Error:', error);
            alert('Terjadi kesalahan saat mengambil detail laporan.');
          });
      }
    });
    document.getElementById('editForm').addEventListener('submit', function(event) {
      event.preventDefault();

      const formData = new FormData(this);

      // Ambil input tanggal/waktu
      const waktuPelanggaran = document.getElementById('editWaktu').value;
      if (waktuPelanggaran) {
        // Pastikan formatnya sesuai dengan SQL Server
        const formattedDateTime = new Date(waktuPelanggaran).toISOString().slice(0, 19).replace('T', ' ');
        formData.set('waktu_pelanggaran', formattedDateTime);
      }

      const idPelanggaran = document.querySelector('.edit[data-id]').getAttribute('data-id');
      formData.append('id_pelanggaran', idPelanggaran);

      fetch('http://localhost/PBL/Project%20Web/app/controllers/updateViolation.php', {
          method: 'POST',
          body: formData,
        })
        .then(response => response.json())
        .then(data => {
          if (data.error) {
            alert('Gagal mengupdate: ' + data.error);
          } else {
            Swal.fire({
              title: 'Laporan Diedit!',
              text: 'Status laporan telah berhasil diperbarui.',
              icon: 'success',
              showConfirmButton: false,
              timer: 3000
            }).then(() => {
              // Reload atau arahkan ke halaman lain jika perlu
              window.location.href = 'dashboard.php';
            });
          }
        })
        .catch(error => {
          console.error('Error:', error);
          alert('Terjadi kesalahan saat menyimpan data.');
        });
    });



    document.addEventListener('click', function(event) {
      if (event.target.classList.contains('btn-danger')) {
        const idPelanggaran = document.querySelector('.check').getAttribute('data-id');
        const newStatus = event.target.classList.contains('btn-danger') ? 'Reject' : 'valid';

        if (isNaN(idPelanggaran)) {
          alert('ID Pelanggaran tidak valid.');
          return;
        }

        // Kirim permintaan untuk memperbarui status laporan
        fetch(`http://localhost/PBL/Project%20Web/app/controllers/updateViolationStatus.php`, {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json'
            },
            body: JSON.stringify({
              id_pelanggaran: idPelanggaran,
              status: newStatus
            })
          })
          .then(response => response.json())
          .then(data => {
            if (data.success) {
              Swal.fire({
                title: 'Laporan Diterima!',
                text: 'Status laporan telah berhasil diperbarui.',
                icon: 'success',
                showConfirmButton: false,
                timer: 3000
              }).then(() => {
                // Reload atau arahkan ke halaman lain jika perlu
                window.location.href = 'dashboard.php';
              });
              // Tutup modal setelah status diperbarui
              const modal = new bootstrap.Modal(document.getElementById('detailModal'));
              modal.hide();

            } else {
              alert('Gagal memperbarui status laporan');
            }
          })
          .catch(error => {
            console.error('Fetch Error:', error);
            alert('Terjadi kesalahan saat memperbarui status laporan.');
          });
      }
    });
  </script>
  <!-- Tambahkan SweetAlert2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../../../../../public/js/argon-dashboard.min.js?v=2.1.0"></script>




  <!-- Modal untuk Zoom Gambar -->
  <div class="modal fade" id="buktiZoomModalXYZ01" tabindex="-1" aria-labelledby="buktiZoomModalLabelXYZ01"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-body p-0">
          <p style="font-weight: bold; color: #223381; margin-bottom: 0px; margin-left: 20px; margin-top: 20px;">
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
      <td class="text-16" style="color: #6B7280; text-align: center; font-size: 16px;">TUV02</td>
      <td class="text-16" style="color: #6B7280; font-size: 16px;">Makan di Kelas</td>
      <td class="text-center">
        <span class="badge bg-success text-white p-2 fs-7 rounded-3"
          style="font-weight: 600; width: 100px; text-align: center; height: 30px; line-height: 16px;">
          VALID
        </span>
      </td>
      <td class="text-center">
        <button class="btn btn-primary py-1 px-4 fs-7 w-55 rounded-3" data-bs-toggle="modal"
          data-bs-target="#detailModalTUV02" style="font-weight: 600;">
          CHECK
        </button>
      </td>
    </tr> -->

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
                <img src="../../../../../public/img/student.jpg" alt="Bukti Pelanggaran" class="img-fluid rounded"
                  data-bs-toggle="modal" data-bs-target="#buktiZoomModalTUV02" style="cursor: pointer;">
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
            <button class="btn btn-primary rounded-3 me-2" data-bs-toggle="modal" data-bs-target="#editModalTUV02"
              style="font-weight: 600; font-size: 14px; padding: 6px 12px; width: 120px; height: 40px;">Edit</button>
            <button class="btn btn-primary rounded-3"
              style="font-weight: 600; font-size: 14px; padding: 6px 12px; width: 120px; height: 40px;"
              data-bs-toggle="modal" data-bs-target="#riwayatModalTUV02">Riwayat</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  Modal untuk Edit TUV02
  <div class="modal fade" id="editModalTUV02" tabindex="-1" aria-labelledby="editModalLabelTUV02" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabelTUV02" style="font-size: 20px; font-weight: 600; color: #223381;">
            Edit Detail Pelanggaran</h5>
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
              <input type="text" class="form-control" value="Jumat, 15 November 2024 pukul 08:00" required>
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
              <button type="submit" class="btn btn-primary me-2" style="font-weight: 600;">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal untuk Riwayat TUV02 -->
  <div class="modal fade" id="riwayatModalTUV02" tabindex="-1" aria-labelledby="riwayatModalLabelTUV02"
    aria-hidden="true">
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
                <i class="bi bi-person-circle me-2 icon-user" style="font-size: 24px; color: #223381;"></i>
              </div>
              <div class="message-bubble">
                <p>Pada saat itu saya hanya membawa bungkus makanan, tidak makan di kelas</p>
              </div>
            </div>
            <div class="left d-flex justify-content-start align-items-start mb-3">
              <div>
                <i class="bi bi-person-circle me-2 icon-user" style="font-size: 24px; color: #223381;"></i>
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
                <i class="bi bi-person-circle ms-2 icon-user" style="font-size: 24px; color: #223381;"></i>
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

              <input type="file" class="form-control" accept="image/*" style="display: none;" id="fileInputTUV02">
              <!-- Input file tetap tersembunyi -->

              <input type="text" class="form-control" placeholder="Kirim pesan..." aria-label="Kirim pesan"
                style="height: 40px; padding-left: 10px;">

              <button class="btn btn-primary" type="button" style="font-weight: 600; height: 40px; margin-top: 0px">
                <i class="fas fa-paper-plane"></i>
              </button>
            </div>
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
          <p style="font-weight: bold; color: #223381; margin-bottom: 0px; margin-left: 20px; margin-top: 20px;">
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
</body>

</html>