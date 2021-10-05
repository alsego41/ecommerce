<?php 
    // require_once "../views/modules/pageHead.php";
    
    function renderPublication($product){
        head("$product[productName] - Administrador");
        // echo var_dump($product);
        ?>
<div class="publication__block">
    <div class='publication__main--header'>
        <div class='publication__images'>
        </div>
        <div class='publication__details--head'>
            <p class='publication__text--primary'><?php echo $product['productName'];?></p>
            <p class='publication__text--secondary'><?php echo $product['productDescription'];?></p>
        </div>
        <div class='publication__cart'>
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
            <div class="publication__button publication__cart--section publication__cart--last">
                <p class="publication__button--text">Agregar al carrito</p>
                <!-- <img src="" alt=""> -->
            </div>
        </div>
    </div>
</div>

<?php 
    }
?>

<!-- <img src='main.jpg' alt=''>
        <img src='others.jpg' alt=''> -->

<!-- <p>Buy options - cards, transfers, mp</p>
                <p>Shipping or other ways</p> -->