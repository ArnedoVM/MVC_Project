
<?php include __DIR__ . '/../header.php'; ?>
<h1>Edit User</h1>
<form action="/user/updateUser/<?= $user['id'] ?>" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" value="<?= $user['username'] ?>" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" value="<?= $user['password'] ?>" required>

    <label for="role">Role:</label>
    <input type="text" id="role" name="role" value="<?= $user['role'] ?>" required>

    <button type="submit">Update</button>
</form>