<?php
    function renderCategories($categories) {
        while ($result = mysqli_fetch_assoc($categories)){
            echo "<li class='categories__box'>
            <a href='#' class='categories__text'>$result[categoryName]</a>
            </li>";
        }
    }
?>

