<?php
    function fetchAllProducts() {
        require_once 'database.php';
        $connection = connect();
        $sql = "SELECT * FROM products2";
        // $stmt = mysqli_prepare($connection, $sql);
        $result = mysqli_query($connection, $sql);
        return $result;
    }

    function fetchProductByCategory($categoryId){
        require_once 'database.php';
        $connection = connect();
        $sql = "SELECT * FROM products2 WHERE categoryId = $categoryId";
        // $stmt = mysqli_prepare($connection, $sql);
        $result = mysqli_query($connection, $sql);
        return $result;
    }
?>