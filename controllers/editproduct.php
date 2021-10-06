<?php 
    require_once "../views/modules/pageHead.php";
    head('Editar producto - Administrador');
?>

<body>
    <?php 
        require_once "../views/modules/navbar.php";
        require_once "../views/modules/productDetails.php";
        include('../models/queryCategories.php');
        if (isset($_GET['prodId'])){
            include('../models/queryProducts.php');
            $product = mysqli_fetch_assoc(fetchOneProduct($_GET['prodId']));
            fichaEditProduct(fetchAllCategories(), $product);
            if (isset($_POST['btnEditProduct'])){
                include('../models/editProduct.php');
                $id = $_GET['prodId'];
                editProduct($id);
                header("location: product.php?prodId=$id&preview=true");
            }
        }
    ?>
</body>