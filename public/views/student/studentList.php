

<?php include __DIR__ . '/../header.php'; ?>
<!-- student/studentList.php -->

<div class="main-content">
    <div class="container">
    <h1>Student List</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Nationality</th>
            <th>Citizenship</th>
            <th>Sex</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($students as $student) : ?>
        <tr>
            <td><?= $student['id'] ?></td>
            <td><?= $student['name'] ?></td>
            <td><?= $student['email'] ?></td>
            <td><?= $student['phone'] ?></td>
            <td><?= $student['nationality'] ?></td>
            <td><?= $student['citizenship'] ?></td>
            <td><?= $student['sex'] ?></td>
            <td>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewStudentModal<?= $student['id'] ?>">
                View
            </button>
                <a href="/student/editStudent/<?= $student['id'] ?>" class="btn btn-secondary">
                    Edit
                </a>
                <a href="/student/deleteStudent/<?= $student['id'] ?>" class="btn btn-danger">
                    Delete
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
</div>
<?php foreach ($students as $student) : ?>
    <div class="modal fade" id="viewStudentModal<?= $student['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="viewStudentModalLabel<?= $student['id'] ?>" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewStudentModalLabel<?= $student['id'] ?>">Student Information</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><strong>ID:</strong> <?= $student['id'] ?></p>
                <p><strong>Name:</strong> <?= $student['name'] ?></p>
                <p><strong>Email:</strong> <?= $student['email'] ?></p>
                <p><strong>Phone:</strong> <?= $student['phone'] ?></p>
                <p><strong>Nationality:</strong> <?= $student['nationality'] ?></p>
                <p><strong>Citizenship:</strong> <?= $student['citizenship'] ?></p>
                <p><strong>Sex:</strong> <?= $student['sex'] ?></p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
    </div>
</div>
<?php endforeach; ?>