<?php
    function renderCategories($categories) {
        while ($result = mysqli_fetch_assoc($categories)){
            echo "<li class='categories__box'>
            <a href='?categoryId=$result[categoryId]' class='categories__text'>$result[categoryName]</a>
            </li>";
        }
    }
?>

