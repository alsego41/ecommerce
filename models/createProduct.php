<?php
    include("database.php");
    include('queryCategories.php');

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
        // state se refleja como 'on' cambiar a true/false
        $sql = "INSERT INTO products2 (productName, productStock, productState, categoryId, productBrand, productModel, productUbication, productDescription) VALUES (?,?,?,?,?,?,?,?)";

        $conn = connect();
        $stmt = $conn->prepare($sql);

        $stmt->bind_param("sisissss", $name, $stock, $state, $categoryId, $brand, $model, $ubication, $description);

        $stmt->execute();

        $stmt->close();
        $conn->close();
        header('location: ../controllers/addproduct.php');
    }
?>