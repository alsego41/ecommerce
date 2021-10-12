<main class="data__container">
    <div class="leftpanel__container">
        <div class="categories__container">
            <?php Category::render();?>
        </div>
    </div>
    <div class="productslist">
        <?php Product::renderAll('user');?>
    </div>
</main>