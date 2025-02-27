
<?php include __DIR__ . '/../header.php'; ?>
<h1>Course Details</h1>
<table>
    <tr>
        <th>ID</th>
        <td><?= $course['id'] ?></td>
    </tr>
    <tr>
        <th>Name</th>
        <td><?= $course['name'] ?></td>
    </tr>
    <tr>
        <th>Description</th>
        <td><?= $course['description'] ?></td>
    </tr>
</table>