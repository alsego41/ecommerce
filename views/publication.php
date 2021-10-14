<?php 
    $product = Product::$currProd;
?>
<div class="publication__block">
    <div class='publication__main--header'>
        <div class='publication__images'>
            <img src="https://www.amd.com/system/files/styles/992px/private/2019-06/238593-ryzen-3-vega-pib-left-facing-1260x709_0.png?itok=o-efjbjS"
                alt="Ryzen 3 3200G" class='publication__images--main'>
            <img src="https://www.amd.com/system/files/styles/992px/private/2019-06/238593-ryzen-3-vega-pib-left-facing-1260x709_0.png?itok=o-efjbjS"
                alt="" class='publication__images--secondary publication__images--active'>
            <img src="https://www.amd.com/system/files/styles/992px/private/2019-06/238593-ryzen-3-vega-pib-left-facing-1260x709_0.png?itok=o-efjbjS"
                alt="" class='publication__images--secondary'>
            <img src="https://www.amd.com/system/files/styles/992px/private/2019-06/238593-ryzen-3-vega-pib-left-facing-1260x709_0.png?itok=o-efjbjS"
                alt="" class='publication__images--secondary'>
            <img src="https://www.amd.com/system/files/styles/992px/private/2019-06/238593-ryzen-3-vega-pib-left-facing-1260x709_0.png?itok=o-efjbjS"
                alt="" class='publication__images--secondary'>
        </div>
        <div class='publication__details--head'>
            <p class='publication__text--primary'><?php echo $product['productName'];?></p>
            <pre class='publication__text--secondary'><?php echo $product['productDescription'];?></pre>
        </div>
        <div class='publication__cart'>
            <?php if ($product['productState'] == 0){
                echo "<p class='publication__text--inactive'>Publicación desactivada</p>";
            } ?>
            <div class="publication__price publication__cart--section">
                <p class='publication__text--primary'>ARS <?php echo $product['productPrice']; ?></p>
            </div>
            <div class="publication__payment publication__cart--section">
                <p class='publication__text--title'>Medios de pago</p>
            </div>
            <div class="publication__shipping publication__cart--section">
                <p class='publication__text--title'>Costo de envío</p>
                <p class='publication__text--secondary'>ARS 450.00</p>
                <p class='publication__text--terciary'>A todo el país</p>
            </div>
            <div class="publication__container--qty publication__cart--section">
                <p class='publication__text--qty publication__text--title'>Cantidad</p>
                <input type="number" name="prodQty" id="prodQty" value="1" min="1"
                    max=<?php echo $product['productStock']; ?> class='publication__input--qty'>
                <p class='publication__text--terciary'>(<?php echo $product['productStock']; ?> disponibles)</p>
            </div>
            <?php if ($product['productState'] == 0){
                ?>
            <div
                class='publication__button publication__button--inactive publication__cart--section publication__cart--last'>
                <?php
            } else {
                ?>
                <div class='publication__button publication__cart--section publication__cart--last'
                    onclick="addToCart(<?php echo $product['productId']?>, <?php echo $product['productState']?>, <?php echo $product['productStock'] ?>)">
                    <?php
            }?>
                    <!-- <div class="publication__button publication__cart--section publication__cart--last"> -->
                    <p class="publication__button--text">Agregar al carrito</p>
                    <!-- <img src="" alt=""> -->
                </div>
            </div>
        </div>
        <div class="publication__extra">
            <p class="publication__text--title">Marca</p>
            <p class="publication__text--secondary"><?php echo $product['productBrand'] ?></p>
            <p class="publication__text--title">Modelo</p>
            <p class="publication__text--secondary"><?php echo $product['productModel'] ?></p>
        </div>
    </div>