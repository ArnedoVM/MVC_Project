<?php
// app/Controllers/CourseController.php

// app/Controllers/CourseController.php

class CourseController {

    private $courseModel;

    public function __construct() {
        require_once(__DIR__.'/../Models/CourseModel.php');
        $this->courseModel = new CourseModel();
    }

    public function courseList() {
        $courses = $this->courseModel->getAllCourses();
        require_once('./public/views/course/courseList.php');
    }

    public function courseDetails($id) {
        $course = $this->courseModel->getCourseById($id);
        require_once('./public/views/course/courseDetails.php');
    }

    public function createCourse() {
        require_once('./public/views/course/createCourse.php');
    }

    public function storeCourse() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $result = $this->courseModel->createCourse($name, $description);
            if ($result) {
                header('Location: /course');
                exit();
            } else {
                echo 'Failed to create course';
            }
        }
    }

    public function editCourse($id) {
        $course = $this->courseModel->getCourseById($id);
        require_once('./public/views/course/editCourse.php');
    }

    public function updateCourse($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $result = $this->courseModel->updateCourse($id, $name, $description);
            if ($result) {
                header('Location: /course');
                exit();
            } else {
                echo 'Failed to update course';
            }
        }
    }

    public function deleteCourse($id) {
        $result = $this->courseModel->deleteCourse($id);
        if ($result) {
            header('Location: /course');
            exit();
        } else {
            echo 'Failed to delete course';
        }
    }
}
?>