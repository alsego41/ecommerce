<?php 
    require_once "../views/modules/pageHead.php";
    head('Inicio - Administrador');
?>
<body>
    <?php 
        // require_once "../views/modules/header.php";
        require_once "../views/modules/navbar.php";
        // echo md5(rand(1000,5000))."<br>";
        // echo md5(rand(1000,5000))."<br>";
        // echo md5(rand(1000,5000))."<br>";
        // echo md5(rand(1000,5000))."<br>";
        // echo md5(rand(1000,5000))."<br>";
    ?>
    <main class="data__container">
        <div class="leftpanel__container">
            <div class="addx__shortcut">
                <?php
                    $textAdd = 'Agregar productos';
                    require_once "../views/modules/addShortcut.php";
                ?>
        </div>
        <div class="categories__container">
            <ul>
                <?php
                    include('../models/queryCategories.php');
                    require_once '../views/modules/categories.php';
                    renderCategories(fetchAllCategories());
                ?>
            </ul>
        </div>
        </div>
        <div class="productslist">
            <?php
                include('../models/queryProducts.php');
                require_once '../views/modules/products.php';

                if (isset($_GET['categoryId'])){
                    // echo "<h1>Setted</h1>";
                    renderProduct(fetchProductByCategory($_GET['categoryId']));
                } else {
                    // include('../views/modules/searchBar.php');
                    renderProduct(fetchAllProducts());
                }
                // need to add checkboxs
                ?>
        </div>
    </main>

    <script>
        
    </script>
</body>
</html>