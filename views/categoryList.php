<?php
    if (isset($_GET['categoryId'])){
        ?>
<a href='.' class='categories__text categories__text--main'>
    <li class='categories__box'>Todos los productos</li>
</a>
<?php
    }
    while ($category = Category::$listCat->fetch_assoc()){
        ?>

<a href="?categoryId=<?php echo $category['categoryId'] ?>" class='categories__box'>
    <li class='categories__text'><?php echo $category['categoryName']?></li>
</a>

<?php
    }
?>