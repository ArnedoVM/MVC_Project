<?php include __DIR__ . '/../header.php'; ?>
/* styles.css */

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.navbar {
    padding: 1rem;
}

.navbar-brand {
    font-size: 1.5rem;
}

.navbar-nav {
    margin-left: auto;
}

.nav-item {
    margin-right: 20px;
}

.nav-link {
    color: #fff;
    text-decoration: none;
}

.nav-link:hover {
    color: #ccc;
}

.navbar-dark .navbar-nav .nav-link {
    color: #fff;
}

.navbar-dark .navbar-nav .nav-link:hover {
    color: #ccc;
}

.navbar-dark .navbar-brand {
    color: #fff;
}

.navbar-dark .navbar-brand:hover {
    color: #ccc;
}

.container-fluid {
    padding: 0;
}

.row {
    margin: 0;
}

.content {
    padding: 20px;
}

.content h1 {
    margin-top: 0;
}

.content p {
    margin-bottom: 20px;
}

.student-list-container {
    width: 80%;
    margin: 40px auto;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.student-list-container table {
    width: 100%;
    border-collapse: collapse;
}

.student-list-container th, .student-list-container td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

.student-list-container th {
    background-color: #f0f0f0;
}

.student-list-container td {
    background-color: #fff;
}

.student-list-container a {
    text-decoration: none;
    color: #337ab7;
}

.student-list-container a:hover {
    color: #23527c;
}

.student-course-list-container {
    width: 80%;
    margin: 40px auto;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.student-course-list-container table {
    width: 100%;
    border-collapse: collapse;
}

.student-course-list-container th, .student-course-list-container td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

.student-course-list-container th {
    background-color: #f0f0f0;
}

.student-course-list-container td {
    background-color: #fff;
}

.student-course-list-container a {
    text-decoration: none;
    color: #337ab7;
}

.student-course-list-container a:hover {
    color: #23527c;
}

.modal-content {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.modal-header {
    background-color: #f0f0f0;
    border-bottom: 1px solid #ddd;
}

.modal-title {
    font-weight: bold;
}

.modal-body {
    padding: 20px;
}

.modal-footer {
    border-top: 1px solid #ddd;
}

.btn {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn-primary {
    background-color: #4CAF50;
    color: #fff;
}

.btn-secondary {
    background-color: #337ab7;
    color: #fff;
}

.btn-danger {
    background-color: #e74c3c;
    color: #fff;
}

.profile-container {
    width: 80%;
    margin: 40px auto;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.profile-info {
    margin-bottom: 20px;
}

.profile-info p {
    margin-bottom: 10px;
}

.profile-info strong {
    font-weight: bold;
}

.profile-actions {
    text-align: right;
}

.profile-actions a {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.profile-actions a:hover {
    background-color: #3e8e41;
}



/*SIDE NAVIGATION*/
.main-content {
    margin-left: 250px; /* Add a margin to the main content area */
    padding: 20px;
}
.side-nav {
    position: fixed;
    top: 80px; /* Adjust this value to match the height of your header */
    bottom:0;
    left: 0;
    width: 250px;
    height: 100vh; /* Adjust this value to match the height of your header */
    background-color: #333;
    padding: 20px;
    margin-top: -20px; /* Add a negative margin-top */
    display: flex;
    flex-direction: column;
}
.side-nav .navbar {
    padding: 0;
    margin: 0;
}

.side-nav .navbar-nav {
    flex-direction: column;
    align-items: flex-start;
}

.side-nav .nav-item {
    margin-bottom: 10px;
}

.side-nav .nav-link {
    color: #fff;
    text-decoration: none;
}

.side-nav .nav-link:hover {
    color: #ccc;
}
<div class="main-content">
    <div class="container">
<h1>Create Student</h1>
<form action="/student/storeStudent" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" required>

    <label for="nationality">Nationality:</label>
    <input type="text" id="nationality" name="nationality" required>

    <label for="citizenship">Citizenship:</label>
    <input type="text" id="citizenship" name="citizenship" required>

    <label for="sex">Sex:</label>
    <input type="text" id="sex" name="sex" required>

    <button type="submit">Create</button>
</form>
</div>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $nationality = $_POST['nationality'];
            $citizenship = $_POST['citizenship'];
            $sex = $_POST['sex'];
            //$result = $this->studentModel->createStudent($name, $email, $phone, $nationality, $citizenship, $sex);
            $sql = "INSERT INTO students (name, email, phone, nationality, citizenship, sex) VALUES ('$name', '$email', '$phone', '$nationality', '$citizenship', '$sex')";
        $result = $this->conn->query($sql);
        return $result;
            if ($result) {
                // success: redirect to this route
                header('Location: /student');
                exit();
            } else {
                echo 'Failed to create student';
            }
        }


?>