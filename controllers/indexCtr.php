<?php
    session_start();
    require_once "./controllers/autoload.php";
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
    }
?>
<script src="./views/js/cartActions.js"></script>