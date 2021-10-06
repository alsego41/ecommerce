<?php
    include('database.php');
    if (isset($_GET['prodId'])){
        $id = $_GET['prodId'];
        $conn = connect();
        $sql = "DELETE FROM products2 WHERE productId=$id";
        $conn->query($sql);
        $conn->close();    
    }
?>