<?php 
    spl_autoload_register(function ($class_name) {
        require_once "./classes/$class_name.php";
    });

    $title = 'Carrito - Ecommerce';
    $styles[] = './views/styles/main.css';
    $styles[] = './views/styles/user.css';
    $styles[] = './views/styles/header.css';
    include './views/head.php';
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