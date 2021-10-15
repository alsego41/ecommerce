<?php 
    spl_autoload_register(function ($class_name) {
        if (file_exists("./classes/$class_name.php")){
            require_once "./classes/$class_name.php";
        } else if (file_exists("./controllers/$class_name.php")){
            require_once "./controllers/$class_name.php";
        }
    });
    
    $title = 'Inicio - Ecommerce';
    $styles[] = './views/styles/main.css';
    $styles[] = './views/styles/header.css';
    $styles[] = './views/styles/categories.css';
    if (Session::check()){
        $styles[] = './views/styles/admin.css';
        include './views/head.php';
        include './views/adminheader.php';
        include './views/header.php';
        include './views/adminView.php';
    } else {
        $styles[] = './views/styles/user.css';
        include './views/head.php';
        include './views/header.php';
        include './views/userView.php';
        include './controllers/addcart.php';
    }
?>