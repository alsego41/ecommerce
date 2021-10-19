<?php 
    require_once "./controllers/autoload.php";
    $title = 'Login - Admin - Ecommerce';
    $styles[] = './views/styles/main.css';
    $styles[] = './views/styles/header.css';
    $styles[] = './views/styles/login.css';
    include './views/head.php';
    include './views/login.php';

    if (isset($_POST['subLogin'])) {
        if (Admin::tryLogin($_POST['user'], $_POST['psw'])){
            unset($_POST['subLogin']);
            header('Location: ./');
        }
    }
?>