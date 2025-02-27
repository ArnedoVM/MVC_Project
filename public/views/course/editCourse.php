<?php include __DIR__ . '/../header.php'; ?>
<h1>Edit Course</h1>
<form action="/course/updateCourse/<?= $course['id'] ?>" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?= $course['name'] ?>" required>

    <label for="description">Description:</label>
    <textarea id="description" name="description" required><?= $course['description'] ?></textarea>

    <button type="submit">Update</button>
</form>