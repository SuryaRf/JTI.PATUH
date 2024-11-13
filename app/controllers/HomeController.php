<?php
class HomeController extends Controller {

    // Fungsi untuk menampilkan halaman home
    public function index() {
        // Memuat tampilan global/home.php
        $this->loadView('global/home');
    }

    // Fungsi untuk logout dan mengarahkan kembali ke halaman utama
    public function logoutAction() {
        // Menghancurkan session
        session_destroy();
        
        // Redirect ke halaman utama setelah logout
        header("Location: /");
        exit(); // Pastikan untuk menghentikan eksekusi setelah redirect
    }
}
?>
