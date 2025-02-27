


<?php

include __DIR__ . '/../header.php';
$student = $this->studentModel->getStudentById($_SESSION['user_id']);

?>

<div class="main-content">
    <div class="container">
    <h1>My Profile</h1>
    <div class="profile-info">
        <p><strong>ID:</strong> <?= $student['id'] ?></p>
        <p><strong>Name:</strong> <?= $student['name'] ?></p>
        <p><strong>Email:</strong> <?= $student['email'] ?></p>
        <p><strong>Phone:</strong> <?= $student['phone'] ?></p>
        <p><strong>Nationality:</strong> <?= $student['nationality'] ?></p>
        <p><strong>Citizenship:</strong> <?= $student['citizenship'] ?></p>
        <p><strong>Sex:</strong> <?= $student['sex'] ?></p>
    </div>
    <div class="profile-actions">
        <a href="/student/editStudent/<?= $student['id'] ?>">Edit Profile</a>
    </div>
</div>
</div>