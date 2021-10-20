<?php
    if (isset($_GET['categoryId'])){
        ?>
<a href='.' class=''>
    <li class='categories__box categories__text categories__text--main'>Todos los productos <i
            class="bi bi-caret-right-fill"></i></li>

</a>
<?php
    }
    while ($category = Category::$listCat->fetch_assoc()){
        ?>

<a href="?categoryId=<?php echo $category['categoryId'] ?>" class=''>
    <li class='categories__text categories__box'><?php echo $category['categoryName']?> <i
            class="bi bi-caret-right-fill"></i></li>
</a>

<?php
    }
?>