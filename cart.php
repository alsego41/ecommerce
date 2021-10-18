<?php 
    spl_autoload_register(function ($class_name) {
        if (file_exists("./classes/$class_name.php")){
            require_once "./classes/$class_name.php";
        } else if (file_exists("./controllers/$class_name.php")){
            require_once "./controllers/$class_name.php";
        }
    });

    $title = 'Carrito - Ecommerce';
    $styles[] = './views/styles/main.css';
    $styles[] = './views/styles/user.css';
    $styles[] = './views/styles/header.css';
    include './views/head.php';
    if (Session::check()){
        include './views/adminheader.php';
    }
    include './views/header.php';
    include './controllers/addcart.php';
    if (isset($_COOKIE['cart'])){
        if ($_COOKIE['cart'] != '[]'){
            $cart = explode(',',substr($_COOKIE['cart'], 1, -1));
            Product::renderSelected($cart);
        } else {
            include './views/emptyCart.php';
        }
    } else {
        include './views/emptyCart.php';
    }
?>