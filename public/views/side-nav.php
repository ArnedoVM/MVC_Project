<!-- side-nav.php -->

<div class="side-nav">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav flex-column">
                    <?php if (isset($_SESSION['user_id'])) : ?>
                        <?php if ($_SESSION['role'] == 'registrar') : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/course">Courses</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/student">Students</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/studentCourse">Student Courses</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/user">Users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/student/createStudent">Create Student</a>
                            </li>
                        <?php elseif ($_SESSION['role'] == 'student') : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/course">Courses</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/user">Users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/student/studentDetails">My Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/studentCourse/studentCourseList">My Courses</a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                </ul>
                
            </div>
        </div>
    </nav>
</div>