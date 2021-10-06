<?php
    function editProduct($id){
        // include("database.php");
        // include('queryCategories.php');
        // echo "<p>".var_dump($_POST)."</p>";

        if (isset($_POST['prodName']) && !empty($_POST['prodName'])){
            $categoryQueried = fetchOneCategory($_POST['categories']);
            $categoryId = $categoryQueried['categoryId'];
            $name = $_POST['prodName'];
            $stock = (int)$_POST['prodStock'];
            if ($_POST['prodState'] == 'true'){
                $state = 1;
            } else {
                $state = 0;
            }
            // $state = $_POST['prodState'];
            $brand = $_POST['prodBrand'];
            $model = $_POST['prodModel'];
            $ubication = $_POST['prodUbication'];
            $description = $_POST['prodDescription'];
            $price = $_POST['prodPrice'];
            // state se refleja como 'on' cambiar a true/false
            $sql = "UPDATE products2 SET productName=?, productStock=?, productState=?, categoryId=?, productBrand=?, productModel=?, productUbication=?, productDescription=?, productPrice=? WHERE productId=$id";

            $conn = connect();
            $stmt = $conn->prepare($sql);

            $stmt->bind_param("siiissssd", $name, $stock, $state, $categoryId, $brand, $model, $ubication, $description, $price);

            $stmt->execute();
            // $lastId = $stmt->insert_id;

            $stmt->close();
            $conn->close();
            // return $lastId;
            // header('location: ../controllers/addproduct.php');
            // header("location: product.php?prodId=$lastId&?preview");
        }
    }

?>