<main class="data__container">
    <div class="leftpanel__container">
        <div class="categories__container">
            <?php Category::render();?>
        </div>
    </div>
    <div class="rightpanel__container">
        <?php
            if (isset($_GET['categoryId'])){
            ?>
        <div class="products__currCategory">
            <p><?php echo Category::checkName();?></p>
        </div>
        <div class="productslist">
            <?php Product::renderByCategory('user');?>
        </div>
        <?php
        } else {
            ?>
        <div class="products__currCategory">
            <p>Todos los productos</p>
        </div>
        <div class="productslist">
            <?php Product::renderAll('user');?>
        </div>
        <?php
        }
        ?>
    </div>
</main>