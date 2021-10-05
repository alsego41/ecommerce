<?php 
    require_once "../views/modules/pageHead.php";
    head('Agregar nuevo producto - Administrador');
?>

<body>
    <?php 
        require_once "../views/modules/navbar.php";
        require_once "../views/modules/productDetails.php";
        include('../models/queryCategories.php');
        // fetchAllCategories()
        fichaNewProduct(fetchAllCategories());
        // include('../models/createProduct.php');
    ?>
</body>