<?php
    function createProduct(){
        // include("database.php");
        // include('queryCategories.php');
        // echo "<p>".var_dump($_POST)."</p>";

        if (isset($_POST['prodName']) && !empty($_POST['prodName'])){
            $categoryQueried = fetchOneCategory($_POST['categories']);
            $categoryId = $categoryQueried['categoryId'];
            $name = $_POST['prodName'];
            $stock = (int)$_POST['prodStock'];
            $state = $_POST['prodState'];
            $brand = $_POST['prodBrand'];
            $model = $_POST['prodModel'];
            $ubication = $_POST['prodUbication'];
            $description = $_POST['prodDescription'];
            $price = $_POST['prodPrice'];
            // state se refleja como 'on' cambiar a true/false
            $sql = "INSERT INTO products2 (productName, productStock, productState, categoryId, productBrand, productModel, productUbication, productDescription, productPrice) VALUES (?,?,?,?,?,?,?,?,?)";

            $conn = connect();
            $stmt = $conn->prepare($sql);

            $stmt->bind_param("sisissssd", $name, $stock, $state, $categoryId, $brand, $model, $ubication, $description, $price);

            $stmt->execute();

            $stmt->close();
            $conn->close();
            // header('location: ../controllers/addproduct.php');
        }
    }

?>