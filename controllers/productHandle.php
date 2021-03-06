<?php 
    session_start();
    require_once "./controllers/autoload.php";
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
                Product::renderForm();
                if (isset($_POST['btnAddProduct'])){
                    $editid = ($_GET['editpid']);
                    $data = Product::getFormData();
                    Product::update($editid, $data);
                    header("Location: ./product.php?pid=$editid");
                }
            }
            if (isset($_GET['create'])){
                Product::renderForm();
                if (isset($_POST['btnAddProduct'])){
                    $data = Product::getFormData();
                    $lastId = Product::create("(".join(',', $data).")");
                    
                    header("Location: ./product.php?pid=$lastId");
                }
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
        ?>
<script src="./views/js/cartActions.js"></script>
<?php
        if (!isset($_GET['pid'])){
            header('Location: ./');
        } else {
            Product::renderPublication($_GET['pid']);
        }
    }    
?>