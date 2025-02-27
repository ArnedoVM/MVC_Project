
<?php include __DIR__ . '/../header.php'; ?>
<h1>Users</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Role</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($users as $user) : ?>
    <tr>
        <td><?= $user['id'] ?></td>
        <td><?= $user['username'] ?></td>
        <td><?= $user['password'] ?></td>
        <td><?= $user['role'] ?></td>
        <td>
            <a href="/user/userDetails/<?= $user['id'] ?>">View</a>
            <a href="/user/editUser/<?= $user['id'] ?>">Edit</a>
            <a href="/user/deleteUser/<?= $user['id'] ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>