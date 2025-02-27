<?php
// app/Models/StudentCourseModel.php

class StudentCourseModel {

    private $conn;

    public function __construct() {
        require_once('./config/db_config.php');
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getAllStudentCourses() {
        $sql = "SELECT * FROM student_courses";
        $result = $this->conn->query($sql);
        $studentCourses = [];
        while ($row = $result->fetch_assoc()) {
            $studentCourses[] = $row;
        }
        return $studentCourses;
    }

    public function getStudentCourseById($id) {
        $sql = "SELECT * FROM student_courses WHERE id = '$id'";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }

    public function createStudentCourse($studentId, $courseId) {
        $sql = "INSERT INTO student_courses (student_id, course_id) VALUES ('$studentId', '$courseId')";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function updateStudentCourse($id, $studentId, $courseId) {
        $sql = "UPDATE student_courses SET student_id = '$studentId', course_id = '$courseId' WHERE id = '$id'";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function deleteStudentCourse($id) {
        $sql = "DELETE FROM student_courses WHERE id = '$id'";
        $result = $this->conn->query($sql);
        return $result;
    }
}


?>