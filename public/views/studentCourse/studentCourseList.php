
<?php include __DIR__ . '/../header.php'; ?>
<!-- studentCourse/studentCourseList.php -->

<!-- studentCourse/studentCourseList.php -->

<div class="student-course-list-container">
    <h1>Student Courses</h1>
    <?php if (is_array($studentCourses)) : ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Student ID</th>
                <th>Course ID</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($studentCourses as $studentCourse) : ?>
            <tr>
                <?php if (isset($studentCourse['id'])) : ?>
                    <td><?= $studentCourse['id'] ?></td>
                    <td><?= $studentCourse['student_id'] ?></td>
                    <td><?= $studentCourse['course_id'] ?></td>
                    <td>
                        <a href="/studentCourse/studentCourseDetails/<?= $studentCourse['id'] ?>">View</a>
                        <a href="/studentCourse/editStudentCourse/<?= $studentCourse['id'] ?>">Edit</a>
                        <a href="/studentCourse/deleteStudentCourse/<?= $studentCourse['id'] ?>">Delete</a>
                    </td>
                <?php else : ?>
                    <td colspan="4">No student course data available.</td>
                <?php endif; ?>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php else : ?>
        <p>No student course data available.</p>
    <?php endif; ?>
</div>