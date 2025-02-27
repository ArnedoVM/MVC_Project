
<?php include __DIR__ . '/../header.php'; ?>
<h1>Edit Student Course</h1>
<form action="/studentCourse/updateStudentCourse/<?= $studentCourse['id'] ?>" method="POST">
    <label for="student_id">Student ID:</label>
    <input type="text" id="student_id" name="student_id" value="<?= $studentCourse['student_id'] ?>" required>

    <label for="course_id">Course ID:</label>
    <input type="text" id="course_id" name="course_id" value="<?= $studentCourse['course_id'] ?>" required>

    <button type="submit">Update</button>
</form>