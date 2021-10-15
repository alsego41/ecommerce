<?php
    if (Product::$listRows > 0){ 
        if (Product::$privilege == 'admin'){
    ?>
<div class='products__box products__box--head'>
    <p class='products__maintext'>Nombre del producto</p>
    <div class='products__actions'>
        <p class='products__actions--head'></p>
    </div>
    <div class='products__stock'>
        <p class='products__stock--text'>Stock Disponible</p>
    </div>
    <p class='products__price'>Precio unitario</p>
</div>


<?php
        while ($product = Product::$listProd->fetch_assoc()){
            if ($product['productState'] == 1){
                $state = 'Activado';
                $textClass = 'active';
            } else {
                $state = 'Desactivado';
                $textClass = 'inactive';
            }
        ?>

<div class='products__box'>
    <p class='products__maintext'><?php echo $product['productName']?></p>
    <div class='products__actions'>
        <p class='products__actions--text products__actions--text<?php echo $textClass?> '><?php echo $state?></p>
        <p class='products__actions--text products__actions--clickable'>
            <a href='product.php?pid=<?php echo $product['productId']?>'>EDITAR</a>
        </p>
    </div>
    <div class='products__stock'>
        <p class='products__stock--text'><?php echo $product['productStock']?></p>
    </div>
    <p class='products__price'><?php echo $product['productPrice']?></p>
</div>

<?php
        }
        } else if (Product::$privilege == 'user'){
            while ($product = Product::$listProd->fetch_assoc()){
                if ($product['productState'] == 1 ){
                // if ($product['productState'] == 1 || $product['productState'] == 0){
                    ?>
<div class='products__box products__box--<?php if ($product['productState'] == 1) echo 'active'; else echo 'inactive';?>'
    onclick="document.location.href = `./product.php?pid=${<?php echo $product['productId']?>}`">
    <img src="https://www.amd.com/system/files/styles/992px/private/2019-06/238593-ryzen-3-vega-pib-left-facing-1260x709_0.png?itok=o-efjbjS"
        alt="Product image" class='products__image--main'>
    <div class="products__details">
        <p class='products__maintext'><?php echo $product['productName']?></p>
        <p class='products__price'>$ <?php echo $product['productPrice']?></p>
    </div>
</div>
<?php
                } 
            ?>
<?php
            }
        }
    } 
    else {
?>

<div class='products__box'>
    <p class='products__maintext'>Esta categoría aún no contiene productos!</p>
</div>

<?php
    }
?>