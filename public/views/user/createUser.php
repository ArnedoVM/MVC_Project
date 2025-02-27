
<?php include __DIR__ . '/../header.php'; ?>
<h1>Create User</h1>
<form action="/user/storeUser" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <label for="role">Role:</label>
    <input type="text" id="role" name="role" required>

    <button type="submit">Create</button>
</form>