
<?php include __DIR__ . '/../header.php'; ?>
<h1>Create Student Course</h1>
<form action="/studentCourse/storeStudentCourse" method="POST">
    <label for="student_id">Student ID:</label>
    <input type="text" id="student_id" name="student_id" required>

    <label for="course_id">Course ID:</label>
    <input type="text" id="course_id" name="course_id" required>

    <button type="submit">Create</button>
</form>