<?php
// app/Models/StudentModel.php

class StudentModel {

    private $conn;

    public function __construct() {
        require_once('./config/db_config.php');
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    // public function getAllStudents() {
    //     $sql = "SELECT * FROM students";
    //     $result = $this->conn->query($sql);
    //     $students = [];
    //     while ($row = $result->fetch_assoc()) {
    //         $students[] = $row;
    //     }
    //     return $students;
    // }

    public function getAllStudents() {
        $sql = "SELECT * FROM students";
        $result = $this->conn->query($sql);
        $students = [];
        while ($row = $result->fetch_assoc()) {
            $students[] = $row;
        }
        return $students;
    }

    public function getStudentById($id) {
        $sql = "SELECT * FROM students WHERE id = '$id'";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }

    public function createStudent($name, $email, $phone, $nationality, $citizenship, $sex) {
        $sql = "INSERT INTO students (name, email, phone, nationality, citizenship, sex) VALUES ('$name', '$email', '$phone', '$nationality', '$citizenship', '$sex')";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function updateStudent($id, $name, $email, $phone, $nationality, $citizenship, $sex) {
        $sql = "UPDATE students SET name = '$name', email = '$email', phone = '$phone', nationality = '$nationality', citizenship = '$citizenship', sex = '$sex' WHERE id = '$id'";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function deleteStudent($id) {
        $sql = "DELETE FROM students WHERE id = '$id'";
        $result = $this->conn->query($sql);
        return $result;
    }
}
?>