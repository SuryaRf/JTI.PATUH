<?php
class AuthController extends Controller {
    public function loginAction() {
        // Load the login view
        $this->loadView('auth/login.php');
    }

    public function logoutAction() {
        // Clear session and redirect to login
        session_destroy();
        header("Location: /?route=auth/login");
    }
}
?>
