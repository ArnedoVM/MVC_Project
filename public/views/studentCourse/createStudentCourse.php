<?php include __DIR__ . '/../header.php'; ?>
<div class="main-content">
    <div class="container">
<h1>Assign Course to Student</h1>
<form action="/studentCourse/storeStudentCourse" method="POST">
    <label for="student_id">Student ID:</label>
    <input type="text" id="student_id" name="student_id" required>

    <label for="course_id">Course:</label>
    <select id="course_id" name="course_id">
        <?php foreach ($courses as $course) : ?>
            <option value="<?= $course['id'] ?>"><?= $course['name'] ?></option>
        <?php endforeach; ?>
    </select>
    <button type="submit">Assign</button>
</form>
        </div>
        </div>