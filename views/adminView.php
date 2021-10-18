<main class="data__container">
    <div class="leftpanel__container">
        <div class="addx__shortcut">
            <a href='product.php?create'>
                <div class='addx__item'>
                    <p class='addx__text'>Agregar productos</p>
                    <img src='../assets/addition.png' alt='Add'>
                </div>
            </a>
        </div>
        <div class="categories__container">
            <?php Category::render();?>
        </div>
    </div>
    <div class="rightpanel__container">
        <?php
            if (isset($_GET['categoryId'])){
            ?>
        <div class="products__currCategory">
            <p><?php echo Category::checkName($_GET['categoryId']);?></p>
        </div>
        <div class="productslist">
            <?php Product::renderByCategory('admin');?>
        </div>
        <?php
        } else {
            ?>
        <div class="products__currCategory">
            <p>Todos los productos</p>
        </div>
        <div class="productslist">
            <?php Product::renderAll('admin');?>
        </div>
        <?php
        }
        ?>
    </div>
</main>