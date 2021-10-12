<?php 
    spl_autoload_register(function ($class_name) {
        require_once "./classes/$class_name.php";
    });

    $title = 'Inicio - Ecommerce';
    $styles[] = './views/styles/main.css';
    $styles[] = './views/styles/user.css';
    $styles[] = './views/styles/header.css';
    $styles[] = './views/styles/categories.css';
    include './views/head.php';
    include './views/header.php';
    include './views/userView.php';
    
    // head('Inicio - Productos', './views/styles/user.css');
    // include('./views/modules/')
    // include('./models/queryCategories.php');
    // include('./views/modules/categories.php');
    // Category::fetchAll();
    ?>


<?php
    // Category::render();
    // Product::renderAll('admin');
    ?>
<?php
    // Database::closeConnection();
    // echo print_r(Category::$listCat);

    // renderCategories(Category::$listCat);
    // if (!isset($_GET['categoryId'])){
    //     include('./models/queryProducts.php');
    //     include('./views/modules/products.php');
    //     renderProduct(fetchAllProducts(), 1);
    // } else {
    //     include('./models/queryProducts.php');
    //     include('./views/modules/products.php');
    //     // renderProduct(fetchProductByCategory());
    //     $products = fetchProductByCategory($_GET['categoryId']);
    //     $qty = mysqli_num_rows($products);
    //     renderProduct($products, $qty);
    // }
    // header('location: controllers/adminLandingPage.php');
?>