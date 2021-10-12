<?php
    if (isset($_GET['categoryId'])){
        ?>
<li class='categories__box'>
    <a href='.' class='categories__text categories__text--main'>Todos los productos</a>
</li>
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