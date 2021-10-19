<?php 
    session_start();
    require_once "./controllers/autoload.php";
    $title = 'Carrito - Ecommerce';
    $styles[] = './views/styles/main.css';
    $styles[] = './views/styles/user.css';
    $styles[] = './views/styles/header.css';
    include './views/head.php';
    if (Session::check()){
        include './views/adminheader.php';
    }
    include './views/header.php';
    ?>
<script src="./views/js/cartActions.js"></script>
<?php
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