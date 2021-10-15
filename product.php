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
    $styles[] = './views/styles/publication.css';
    
    if (Session::check()){
        $styles[] = './views/styles/admin.css';
        include './views/head.php';
        include './views/adminheader.php';
        include './views/header.php';
        if (isset($_GET['pid']) || isset($_GET['editpid']) || isset($_GET['create']) || isset($_GET['deletepid'])){
            if (isset($_GET['pid'])){
                Product::renderPublication($_GET['pid']);
                Product::showOptions();
            }
            if (isset($_GET['editpid'])){
                Product::edit($_GET['editpid']);
                // Product::showOptions();
            }
            if (isset($_GET['create'])){
                Product::renderForm();
                // Product::renderPublication($_GET['pid']);
                // Product::showOptions();
            }
            if (isset($_GET['deletepid'])){
                Product::delete($_GET['deletepid']);
                header('Location: ./');
            }
        } else {
            header('Location: ./');
        }
    } else {
        $styles[] = './views/styles/user.css';
        include './views/head.php';
        include './views/header.php';
        include './controllers/addcart.php';
        if (!isset($_GET['pid'])){
            header('Location: ./');
        } else {
            Product::renderPublication($_GET['pid']);
        }
    }    
?>