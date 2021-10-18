<?php 
    spl_autoload_register(function ($class_name) {
        if (file_exists("./classes/$class_name.php")){
            require_once "./classes/$class_name.php";
        } else if (file_exists("./controllers/$class_name.php")){
            require_once "./controllers/$class_name.php";
        }
    });

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