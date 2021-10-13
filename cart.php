<?php 
    spl_autoload_register(function ($class_name) {
        require_once "./classes/$class_name.php";
    });

    $title = 'Carrito - Ecommerce';
    $styles[] = './views/styles/main.css';
    $styles[] = './views/styles/user.css';
    $styles[] = './views/styles/header.css';
    // $styles[] = './views/styles/categories.css';
    include './views/head.php';
    include './views/header.php';
    // include './views/userView.php';

    include './controllers/addcart.php';
    // explode cart
    $cart = explode(',',substr($_COOKIE['cart'], 1, -1));
    // // echo var_dump($cart);
    // $test = array_count_values($cart);
    // // echo var_dump($test);
    // foreach ($test as $key => $value) {
    //     echo "key ". $key. " y value ". $value. "<br>";
    //     # code...
    // }
    // print_r(array_count_values($cart));
    // print_r(array_values($cart));
    Product::renderSelected($cart);
    // echo var_dump(Product::$listProd);
    
?>