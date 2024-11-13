<?php
class Core {
    public function handleRequest() {
        // Menangani nama controller yang diterima dari URL (default: Home)
        $controllerName = isset($_GET['controller']) ? $_GET['controller'] : 'Home';
        
        // Menggunakan ucfirst untuk membuat huruf pertama kapital dan menambahkan 'Controller'
        $controllerClass = ucfirst($controllerName) . 'Controller';

        // Memastikan path controller yang benar
        $controllerPath = __DIR__ . '/../controllers/' . $controllerClass . '.php';


        // Cek jika file controller ada
        if (file_exists($controllerPath)) {
            // Sertakan file controller
            require_once $controllerPath;

            // Buat instance controller
            $controller = new $controllerClass();

            // Panggil metode index() sebagai metode default
            if (method_exists($controller, 'index')) {
                $controller->index();
            } else {
                echo "Metode index tidak ditemukan di controller $controllerClass.";
            }
        } else {
            echo "Controller $controllerClass tidak ditemukan.";
        }
    }
}
