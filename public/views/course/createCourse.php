
<?php include __DIR__ . '/../header.php'; ?>
<h1>Create Course</h1>
<form action="/course/storeCourse" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea>

    <button type="submit">Create</button>
</form>