<?php

session_start();


require_once('config/middleware.php');
require_once('./app/Controllers/AuthController.php');
require_once('./app/Controllers/CourseController.php');
require_once('./app/Controllers/StudentController.php');
require_once('./app/Controllers/StudentCourseController.php');
require_once('./app/Controllers/UserController.php');

$routes = [
    '' => 'AuthController@login',
    '/login' => 'AuthController@login',
    '/logout' => 'AuthController@logout',
    '/course' => 'CourseController@courseList',
    '/course/courseDetails' => 'CourseController@courseDetails',
    '/course/createCourse' => 'CourseController@createCourse',
    '/course/editCourse' => 'CourseController@editCourse',
    '/student' => 'StudentController@studentList',
    '/student/studentDetails' => 'StudentController@studentDetails',
    '/student/createStudent' => 'StudentController@createStudent',
    '/student/editStudent' => 'StudentController@editStudent',
    '/student/storeStudent' => 'StudentController@storeStudent',
    '/studentCourse' => 'StudentCourseController@studentCourseList',
    '/studentCourse/studentCourseDetails' => 'StudentCourseController@studentCourseDetails',
    '/studentCourse/createStudentCourse' => 'StudentCourseController@createStudentCourse',
    '/studentCourse/editStudentCourse' => 'StudentCourseController@editStudentCourse',
    '/user' => 'UserController@userList',
    '/user/userDetails' => 'UserController@userDetails',
    '/user/createUser' => 'UserController@createUser',
    '/user/editUser' => 'UserController@editUser',
];

$request_uri = $_SERVER['REQUEST_URI'];
$route = rtrim(strtok($request_uri, '?'), '/');

if (array_key_exists($route, $routes)) {
    $route_parts = explode('@', $routes[$route]);
    $controller = $route_parts[0];
    $method = $route_parts[1];

    $controller = new $controller();
    $controller->$method();
} else {
    echo '404 Not Found';
}
?>
