<?php
    ob_start();
    function renderCategories($categories) {
        if (isset($_GET['categoryId'])){
            echo "<li class='categories__box'>
                <a href='adminLandingPage.php' class='categories__text'>Todos los productos</a>
            </li>";
        }
        while ($result = mysqli_fetch_assoc($categories)){
            echo "<li class='categories__box'>
            <a href='?categoryId=$result[categoryId]' class='categories__text'>$result[categoryName]</a>
            </li>";
        }
    }
    ob_end_flush();
?>