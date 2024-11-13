<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JTI.Patuh</title>
    <link rel="stylesheet" href="/PBL/Project%20Web/public/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/PBL/Project%20Web/public/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="/PBL/Project%20Web/public/css/font-awesome.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="/PBL/Project%20Web/public/css/animate.min.css">

    <!-- Medipro CSS -->
    <link rel="stylesheet" href="/PBL/Project%20Web/public/css/normalize.css">
    <link rel="stylesheet" href="/PBL/Project%20Web/public/style.css">
    <link rel="stylesheet" href="/PBL/Project%20Web/public/css/responsive.css">
    <style>
        .content {
            margin: 2rem auto;
            max-width: 800px;
            text-align: center;
        }
        table {
            margin: 0 auto;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="preloader">
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>

            <div class="indicator">
                <svg width="16px" height="12px">
                    <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                </svg>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <header class="header">
        <?php include 'header.php'; ?>
    </header>

    <!-- Content Section -->
    <section class="content">
        <h2>Ketahui Pelanggaran di Tata Tertib</h2>
        <p>Cek detail nya dibawah ini</p><br>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>No.</th>
                        <th>Pelanggaran</th>
                        <th>Tingkat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Berkomunikasi dengan tidak sopan, baik tertulis atau tidak tertulis kepada mahasiswa, dosen, karyawan, atau orang lain</td>
                        <td>V</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Berbusana tidak sopan dan tidak rapi, misalnya berpakaian ketat, transparan, memakai t-shirt (baju kaos tidak berkerah), tank top, dan lain-lain.</td>
                        <td>IV</td>
                    </tr>
                <tr>
                    <td>3</td>
                    <td>Mahasiswa Iaki-laki berambut tidak rapi, gondrong yaitu  panjang rarnbutnya melewati batas alis mata di bagian depan,  telinga di bagian sarnping atau menyentuh kerah baju di bagian leher</td>
                    <td>IV</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Mahasiswa berambut dengan model punk, dicat selain hitam  dan/ atau skinned.</td>
                    <td>IV</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Makan, atau minum di dalam ruang kuliah/ laboratorium/  bengkel.</td>
                    <td>IV</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Melanggar peraturan/ ketentuan yang berlaku di Polinema baik  di Jurusan/ Program Studi</td>
                    <td>III</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Tidak menjaga kebersihan di seluruh area Polinema</td>
                    <td>III</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Membuat kegaduhan yang mengganggu pelaksanaan  perkuliahan atau praktikum yang sedang berlangsung.</td>
                    <td>III</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Merokok di luar area kawasan merokok</td>
                    <td>III</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Bermain kartu, game online di area kampus</td>
                    <td>III</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Mengotori atau mencoret-coret meja, kursi, tembok, dan lain-lain di  lingkungan Polinema</td>
                    <td>III</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Bertingkah laku kasar atau tidak sopan kepada mahasiswa, dosen,  dan/atau karyawan.</td>
                    <td>III</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Merusak sarana dan prasarana yang ada di area Polinema</td>
                    <td>II</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Tidak menjaga ketertiban dan keamanan di seluruh area Polinema  (misalnya: parkir tidak pada tempatnya, konvoi selebrasi wisuda  dll)</td>
                    <td>II</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Melakukan pengotoran/ pengrusakan barang milik orang lain  termasuk milik Politeknik Negeri Malang</td>
                    <td>II</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>Mengakses materi pornografi di kelas atau area kampus</td>
                    <td>II</td>
                </tr>
                
                <tr>
                    <td>17</td>
                    <td>Membawa dan/atau menggunakan senjata tajam dan/atau senjata  api untuk hal kriminal</td>
                    <td>II</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>Melakukan perkelahian, serta membentuk geng/ kelompok yang  bertujuan negatif.</td>
                    <td>II</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>Melakukan kegiatan politik praktis di dalam kampus</td>
                    <td>II</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>Melakukan tindakan kekerasan atau perkelahian di dalam kampus.</td>
                    <td>II</td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>Melakukan penyalahgunaan identitas untuk perbuatan negatif</td>
                    <td>II</td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>Mengancam, baik tertulis atau tidak tertulis kepada mahasiswa,  dosen, dan/atau karyawan.</td>
                    <td>II</td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>Mencuri dalam bentuk apapun</td>
                    <td>I/II</td>
                </tr>
                <tr>
                    <td>24</td>
                    <td>Melakukan kecurangan dalam bidang akademik, administratif, dan keuangan</td>
                    <td>I/II</td>
                </tr>
                <tr>
                    <td>25</td>
                    <td>Melakukan pemerasan dan/atau penipuan</td>
                    <td>I/II</td>
                </tr>
                <tr>
                    <td>26</td>
                    <td>Melakukan pelecehan dan/atau tindakan asusila dalam segala  bentuk di dalam dan di luar kampus</td>
                    <td>I/II</td>
                </tr>
                <tr>
                    <td>27</td>
                    <td>Berjudi, mengkonsumsi minum-minuman keras, dan/ atau  bermabuk-mabukan di lingkungan dan di luar lingkungan Kampus Polinema</td>
                    <td>I/II</td>
                </tr>
                
                <tr>
                    <td>28</td>
                    <td>Mengikuti organisasi dan atau menyebarkan faham-faham yang  dilarang oleh Pemerintah.</td>
                    <td>I/II</td>
                </tr>
                <tr>
                    <td>29</td>
                    <td>Melakukan pemalsuan data / dokumen / tanda tangan.</td>
                    <td>I/II</td>
                </tr>
                
                <tr>
                    <td>30</td>
                    <td>Melakukan plagiasi (copy paste) dalam tugas-tugas atau karya ilmiah</td>
                    <td>I/II</td>
                </tr>
                <tr>
                    <td>31</td>
                    <td>Tidak menjaga nama baik Polinema di masyarakat dan/ atau  mencemarkan nama baik Polinema melalui media apapun</td>
                    <td>I</td>
                </tr>
                <tr>
                    <td>32</td>
                    <td>Melakukan kegiatan atau sejenisnya yang dapat menurunkan  kehormatan atau martabat Negara, Bangsa dan Polinema.</td>
                    <td>I</td>
                </tr>
                <tr>
                    <td>33</td>
                    <td>Menggunakan barang-barang psikotropika dan/ atau zat-zat Adiktif  lainnya</td>
                    <td>I</td>
                </tr>
                <tr>
                    <td>34</td>
                    <td>Mengedarkan serta menjual barang-barang psikotropika dan/ atau  zat-zat Adiktif lainnya</td>
                    <td>I</td>
                </tr>
                <tr>
                    <td>35</td>
                    <td>Terlibat dalam tindakan kriminal dan dinyatakan bersalah oleh  Pengadilan</td>
                    <td>I</td>
                </tr>
                
            </tbody>
        </table>
    </section>
    <!-- Footer -->
    <footer class="footer">
        Kami Membantu Anda Menjadi Bagian dari Kampus yang Tertib dan Teratur
    </footer>

    <!-- jquery Min JS -->
    <script src="/PBL/Project%20Web/public/js/jquery.min.js"></script>
    <!-- jquery Migrate JS -->
    <script src="/PBL/Project%20Web/public/js/jquery-migrate-3.0.0.js"></script>
    <!-- jquery Ui JS -->
    <script src="/PBL/Project%20Web/public/js/jquery-ui.min.js"></script>
    <!-- Jquery Nav JS -->
    <script src="/PBL/Project%20Web/public/js/jquery.nav.js"></script>
    <!-- Slicknav JS -->
    <script src="/PBL/Project%20Web/public/js/slicknav.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="/PBL/Project%20Web/public/js/bootstrap.min.js"></script>
    <!-- Main JS -->
    <script src="/PBL/Project%20Web/public/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="/PBL/Project%20Web/public/js/script.js"></script>
</body>

</html>