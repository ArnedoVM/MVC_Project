<?php
require_once(__DIR__.'/../Models/UserModel.php');

class AuthController {

    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = $this->userModel->getUserByUsername($username);

            if ($user && $user['password'] === $password) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role'];

                if (isset($_SESSION['redirect_url'])) {
                    $redirect_url = $_SESSION['redirect_url'];
                    unset($_SESSION['redirect_url']);
                    header("Location: $redirect_url");
                } else {
                    header('Location: /public/views/HomePage.php');
                }
                exit();
            } else {
                echo 'Login failed. Please check your credentials.';
            }
        } else {
            require_once('./public/views/LogInPage.php');
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: /login');
        exit();
    }
}

?>
