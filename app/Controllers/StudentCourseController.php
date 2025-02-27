<?php
// app/Controllers/StudentCourseController.php

class StudentCourseController {

    private $studentCourseModel;
    private $courseModel;

    public function __construct() {
        require_once(__DIR__.'/../Models/StudentCourseModel.php');
        $this->studentCourseModel = new StudentCourseModel();
        require_once(__DIR__.'/../Models/CourseModel.php');
        $this->courseModel = new CourseModel();
    }
    // public function studentCourseList() {
    //     $studentCourses = $this->studentCourseModel->getAllStudentCourses();
    //     require_once('./public/views/studentCourse/studentCourseList.php');
    // }

    public function studentCourseList() {
        $studentCourses = $this->studentCourseModel->getAllStudentCourses();
        if (is_array($studentCourses)) {
            require_once('./public/views/studentCourse/studentCourseList.php');
        } else {
            echo 'No student course data available.';
        }
    }

    public function createStudentCourse() {
        $courses = $this->courseModel->getAllCourses();
        require_once('./public/views/studentCourse/createStudentCourse.php');
    }

    public function storeStudentCourse() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $studentId = $_POST['student_id'];
            $courseId = $_POST['course_id'];
            $result = $this->studentCourseModel->createStudentCourse($studentId, $courseId);
            if ($result) {
                header('Location: /studentCourse');
                exit();
            } else {
                echo 'Failed to create student course';
            }
        }
    }

    public function getAllStudentCourses() {
        $sql = "SELECT * FROM student_courses";
        $result = $this->conn->query($sql);
        $studentCourses = [];
        while ($row = $result->fetch_assoc()) {
            $studentCourses[] = [
                'id' => $row['id'],
                'student_id' => $row['student_id'],
                'course_id' => $row['course_id']
            ];
        }
        return $studentCourses;
    }

    public function editStudentCourse($id) {
        $studentCourse = $this->studentCourseModel->getStudentCourseById($id);
        require_once('./public/views/studentCourse/editStudentCourse.php');
    }

    public function updateStudentCourse($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $studentId = $_POST['student_id'];
            $courseId = $_POST['course_id'];
            $result = $this->studentCourseModel->updateStudentCourse($id, $studentId, $courseId);
            if ($result) {
                header('Location: /studentCourse');
                exit();
            } else {
                echo 'Failed to update student course';
            }
        }
    }

    public function deleteStudentCourse($id) {
        $result = $this->studentCourseModel->deleteStudentCourse($id);
        if ($result) {
            header('Location: /studentCourse');
            exit();
        } else {
            echo 'Failed to delete student course';
        }
    }
}


?>