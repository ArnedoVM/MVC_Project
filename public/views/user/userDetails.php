
<?php include __DIR__ . '/../header.php'; ?>
<h1>User Details</h1>
<table>
    <tr>
        <th>ID</th>
        <td><?= $user['id'] ?></td>
    </tr>
    <tr>
        <th>Username</th>
        <td><?= $user['username'] ?></td>
    </tr>
    <tr>
        <th>Password</th>
        <td><?= $user['password'] ?></td>
    </tr>
    <tr>
        <th>Role</th>
        <td><?= $user['role'] ?></td>
    </tr>
</table>