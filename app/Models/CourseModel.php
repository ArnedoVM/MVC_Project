<?php
// app/Models/CourseModel.php

// app/Models/CourseModel.php

class CourseModel {

    private $conn;

    public function __construct() {
        require_once('./config/db_config.php');
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getAllCourses() {
        $sql = "SELECT * FROM courses";
        $result = $this->conn->query($sql);
        $courses = [];
        while ($row = $result->fetch_assoc()) {
            $courses[] = $row;
        }
        return $courses;
    }

    public function getCourseById($id) {
        $sql = "SELECT * FROM courses WHERE id = '$id'";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }

    public function createCourse($name, $description) {
        $sql = "INSERT INTO courses (name, description) VALUES ('$name', '$description')";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function updateCourse($id, $name, $description) {
        $sql = "UPDATE courses SET name = '$name', description = '$description' WHERE id = '$id'";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function deleteCourse($id) {
        $sql = "DELETE FROM courses WHERE id = '$id'";
        $result = $this->conn->query($sql);
        return $result;
    }
}
?>