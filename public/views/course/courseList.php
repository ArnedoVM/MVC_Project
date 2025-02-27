
<?php include __DIR__ . '/../header.php'; ?>
<h1>Courses</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($courses as $course) : ?>
    <tr>
        <td><?= $course['id'] ?></td>
        <td><?= $course['name'] ?></td>
        <td><?= $course['description'] ?></td>
        <td>
            <a href="/course/courseDetails/<?= $course['id'] ?>">View</a>
            <a href="/course/editCourse/<?= $course['id'] ?>">Edit</a>
            <a href="/course/deleteCourse/<?= $course['id'] ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>