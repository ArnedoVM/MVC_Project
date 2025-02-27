<?php include __DIR__ . '/../header.php'; ?>
<div class="main-content">
    <div class="container">
<h1>Create Student</h1>
<form action="/student/storeStudent" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" required>

    <label for="nationality">Nationality:</label>
    <input type="text" id="nationality" name="nationality" required>

    <label for="citizenship">Citizenship:</label>
    <input type="text" id="citizenship" name="citizenship" required>

    <label for="sex">Sex:</label>
    <input type="text" id="sex" name="sex" required>

    <button type="submit">Create</button>
</form>
</div>
</div>