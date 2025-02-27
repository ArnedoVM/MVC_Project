<?php
class UserModel {

    private $conn;

    public function __construct() {
        require_once('./config/db_config.php');
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getAllUsers() {
        $sql = "SELECT * FROM users";
        $result = $this->conn->query($sql);
        $users = [];
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        return $users;
    }

    public function getUserById($id) {
        $sql = "SELECT * FROM users WHERE id = '$id'";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }
    public function getUserByUsername($username) {
        $sql = "SELECT id, username, password, role FROM users WHERE username = '$username'";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }
    public function createUser($username, $password, $role) {
        $sql = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function updateUser($id, $username, $password, $role) {
        $sql = "UPDATE users SET username = '$username', password = '$password', role = '$role' WHERE id = '$id'";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function deleteUser($id) {
        $sql = "DELETE FROM users WHERE id = '$id'";
        $result = $this->conn->query($sql);
        return $result;
    }
}


?>