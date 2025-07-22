<?php
session_start();
require_once '//controller/StudentController.php';

$controller = new StudentController();

if (isset($_POST['login'])) {
    $controller->handleLogin($_POST['username'], $_POST['password']);
} elseif (isset($_POST['update'])) {
    $controller->updateProfile($_POST);
} elseif (isset($_SESSION['username'])) {
    $controller->showProfile($_SESSION['username']);
} else {
    include '//view/loginForm.php';
}
?>