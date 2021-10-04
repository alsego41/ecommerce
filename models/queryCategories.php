<?php
    function fetchAllCategories() {
        require_once 'database.php';
        $connection = connect();
        $sql = "SELECT * FROM categories2";
        // $stmt = mysqli_prepare($connection, $sql);
        $result = mysqli_query($connection, $sql);
        return $result;
    }

    function fetchOneCategory($categoryName) {
        require_once 'database.php';
        $connection = connect();
        $sql = "SELECT * FROM categories2 WHERE categoryName = '$categoryName'";
        $result = mysqli_query($connection, $sql);
        $res = $result->fetch_assoc();
        return $res;
    }
?>