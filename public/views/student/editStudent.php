<?php include __DIR__ . '/../header.php'; ?>
<h1>Edit Student</h1>
<form action="/student/updateStudent/<?= $student['id'] ?>" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?= $student['name'] ?>" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?= $student['email'] ?>" required>

    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" value="<?= $student['phone'] ?>" required>

    <label for="nationality">Nationality:</label>
    <input type="text" id="nationality" name="nationality" value="<?= $student['nationality'] ?>" required>

    <label for="citizenship">Citizenship:</label>
    <input type="text" id="citizenship" name="citizenship" value="<?= $student['citizenship'] ?>" required>

    <label for="sex">Sex:</label>
    <input type="text" id="sex" name="sex" value="<?= $student['sex'] ?>" required>

    <button type="submit">Update</button>
</form>