<?php


class StudentController {

    private $studentModel;

    public function __construct() {
        require_once(__DIR__.'/../Models/StudentModel.php');
        $this->studentModel = new StudentModel();
    }

    // public function studentList() {
    //     $students = $this->studentModel->getAllStudents();
    //     require_once('./public/views/student/studentList.php');
    // }

    public function studentList() {
        require_once('./config/middleware.php');
        requireRegistrarRole();
        $students = $this->studentModel->getAllStudents();
        // redirect to this page with data
        require_once('./public/views/student/studentList.php');
    }


    public function studentDetails() {
        $student = $this->studentModel->getStudentById($_SESSION['user_id']);
        require_once('./public/views/student/studentDetails.php');
    }


    public function createStudent() {
        //calls page
        require_once('./public/views/student/createStudent.php');
    }

    public function storeStudent() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $nationality = $_POST['nationality'];
            $citizenship = $_POST['citizenship'];
            $sex = $_POST['sex'];
            $result = $this->studentModel->createStudent($name, $email, $phone, $nationality, $citizenship, $sex);
            if ($result) {
                // success: redirect to this route
                header('Location: /student');
                exit();
            } else {
                echo 'Failed to create student';
            }
        }
    }

    public function editStudent($id) {
        $student = $this->studentModel->getStudentById($id);
        require_once('./public/views/student/editStudent.php');
    }

    public function updateStudent($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $nationality = $_POST['nationality'];
            $citizenship = $_POST['citizenship'];
            $sex = $_POST['sex'];
            $result = $this->studentModel->updateStudent($id, $name, $email, $phone, $nationality, $citizenship, $sex);
            if ($result) {
                // success: redirect to this route
                header('Location: /student');
                exit();
            } else {
                echo 'Failed to update student';
            }
        }
    }

    public function deleteStudent($id) {
        $result = $this->studentModel->deleteStudent($id);
        if ($result) {
            // success: redirect to this route
            header('Location: /student');
            exit();
        } else {
            echo 'Failed to delete student';
        }
    }
}
?>
