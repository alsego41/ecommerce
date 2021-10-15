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
    // $styles[] = './views/styles/user.css';
    $styles[] = './views/styles/header.css';
    $styles[] = './views/styles/publication.css';
    // include './views/head.php';
    if (Session::check()){
        $styles[] = './views/styles/admin.css';
        include './views/head.php';
        include './views/adminheader.php';
        include './views/header.php';
        if (!isset($_GET['pid'])){
            header('Location: ./');
        } else {
            Product::renderPublication($_GET['pid']);
            include './views/publicationOptions.php';
        }
    } else {
        $styles[] = './views/styles/user.css';
        include './views/head.php';
        include './controllers/addcart.php';
        include './views/header.php';
        if (!isset($_GET['pid'])){
            header('Location: ./');
        } else {
            Product::renderPublication($_GET['pid']);
        }
    }
    // include './views/header.php';
    // include './views/userView.php';


    
?>