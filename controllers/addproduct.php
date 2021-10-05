<?php 
    require_once "../views/modules/pageHead.php";
    head('Agregar nuevo producto - Administrador');
?>

<body>
    <?php 
        require_once "../views/modules/navbar.php";
        require_once "../views/modules/productDetails.php";
        include('../models/queryCategories.php');
        include('../models/createProduct.php');
        // fetchAllCategories()
        fichaNewProduct(fetchAllCategories());
        if (isset($_POST['btnAddProduct'])){
            createProduct();
            // header('location: addproduct.php');
        }
    ?>
</body>