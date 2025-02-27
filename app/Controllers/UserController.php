<?php

// app/Controllers/UserController.php

class UserController {

    private $userModel;

    public function __construct() {
        require_once(__DIR__.'/../Models/UserModel.php');
        $this->userModel = new UserModel();
    }

    public function userList() {
        $users = $this->userModel->getAllUsers();
        require_once('./public/views/user/userList.php');
    }

    public function userDetails($id) {
        $user = $this->userModel->getUserById($id);
        require_once('./public/views/user/userDetails.php');
    }

    public function createUser() {
        require_once('./public/views/user/createUser.php');
    }

    public function storeUser() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $role = $_POST['role'];
            $result = $this->userModel->createUser($username, $password, $role);
            if ($result) {
                header('Location: /user');
                exit();
            } else {
                echo 'Failed to create user';
            }
        }
    }

    public function getUserByUsername($username) {
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }
    public function editUser($id) {
        $user = $this->userModel->getUserById($id);
        require_once('./public/views/user/editUser.php');
    }

    public function updateUser($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $role = $_POST['role'];
            $result = $this->userModel->updateUser($id, $username, $password, $role);
            if ($result) {
                header('Location: /user');
                exit();
            } else {
                echo 'Failed to update user';
            }
        }
    }

    public function deleteUser($id) {
        $result = $this->userModel->deleteUser($id);
        if ($result) {
            header('Location: /user');
            exit();
        } else {
            echo 'Failed to delete user';
        }
    }
}

?>