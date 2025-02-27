<?php
// function requireLogin() {
//     if (!isset($_SESSION['user_logged_in'])) {
//         // Debugging line to check execution
//         die('Redirecting to login...');

//         // User is not logged in, store the current URL
//         $_SESSION['redirect_url'] = $_SERVER['REQUEST_URI'];
//         header('Location: /public/views/LogInPage.php');
//         exit();
//     }
// }


// function requireRegistrarRole() {
//     if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'registrar') {
//         header('Location: /login');
//         exit();
//     }
// }



function requireLogin() {
    if (!isset($_SESSION['user_logged_in'])) {
        // User is not logged in, store the current URL
        $_SESSION['redirect_url'] = $_SERVER['REQUEST_URI'];
        header('Location: /public/views/LogInPage.php');
        exit();
    }
}

function requireRegistrarRole() {
    if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'registrar') {
        header('Location: /public/views/LogInPage.php');
        exit();
    }
}

?>