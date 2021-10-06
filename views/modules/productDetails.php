<?php ob_start();?>
<?php
    function fichaNewProduct($categories){
        ?>
<form class='productFicha__container' action='' method='post'>
    <div class='product__container--row'>
        <label for='prodName'>Nombre del Producto</label>
        <input type='text' name='prodName' id='prodName' class='product__input'>
    </div>
    <div class='product__container--row product__container--priceCat'>
        <label for='categories'>Categoría</label>
        <select name='categories' id='productCategories' class='product__select'>;
            <?php
            while ($result = mysqli_fetch_assoc($categories)){
                echo "<option value='$result[categoryName]'>$result[categoryName]</option>";
            };
        ?>
        </select>
        <label for='prodPrice'>Precio</label>
        <input type='number' step='any' min='0' value='0' name='prodPrice' class='product__input'>
    </div>
    <div class='product__container--row product__location'>
        <label for='prodStock'>Inventario</label>
        <input type='number' class='product__input' min='0' value='0' name='prodStock'>
        <label for='prodUbication'>Ubicación</label>
        <input type='text' class='product__input' name='prodUbication'>
    </div>
    <div class='product__container--row product__details'>
        <label for='prodDescription'>Descripción</label>
        <textarea name='prodDescription' id='prodDescription' cols='30' rows='10' class='product__textarea'></textarea>
        <div class='product__details--subgrid'>
            <label for='prodBrand'>Marca</label>
            <input type='text' name='prodBrand' id='prodBrand' class='product__input'>
            <label for='prodModel'>Modelo</label>
            <input type='text' name='prodModel' id='prodModel' class='product__input'>
        </div>
    </div>
    <div class='product__container--row product__images'>
        <label for='imgUpload'>Fotos</label>
        <input type='file' name='imgUpload' id='imgUpload' class='product__img' value='+'>
    </div>
    <div class='product__container--row'>
        <input type='radio' name='prodState' value='true' id='prodState1' checked>
        <label for="prodState1">ACTIVADA</label>
        <input type='radio' name='prodState' value='false' id='prodState2'>
        <label for="prodState2">DESACTIVADA</label>
    </div>
    <div class='product__container--row product__container--lastrow'>
        <input type='submit' name='btnAddProduct' class='product__btn'>
    </div>
</form>
;
<?php
}
function fichaEditProduct($categories, $product){
?>
<form class='productFicha__container' action='' method='post'>
    <div class='product__container--row'>
        <label for='prodName'>Nombre del Producto</label>
        <input type='text' name='prodName' id='prodName' class='product__input'
            value='<?php echo $product['productName'];?>'>
    </div>
    <div class='product__container--row product__container--priceCat'>
        <label for='categories'>Categoría</label>
        <select name='categories' id='productCategories' class='product__select'>;
            <?php
            while ($result = mysqli_fetch_assoc($categories)){
                if ($result['categoryId'] == $product['categoryId']){
                    echo "<option value='$result[categoryName]' selected>$result[categoryName]</option>";
                } else {
                    echo "<option value='$result[categoryName]'>$result[categoryName]</option>";
                }
            };
        ?>
        </select>
        <label for='prodPrice'>Precio</label>
        <input type='number' step='any' min='0' value='<?php echo $product['productPrice'];?>' name='prodPrice'
            class='product__input'>
    </div>
    <div class='product__container--row product__location'>
        <label for='prodStock'>Inventario</label>
        <input type='number' class='product__input' min='0' value='<?php echo $product['productStock'];?>'
            name='prodStock'>
        <label for='prodUbication'>Ubicación</label>
        <input type='text' class='product__input' name='prodUbication'
            value='<?php echo $product['productUbication'];?>'>
    </div>
    <div class='product__container--row product__details'>
        <label for='prodDescription'>Descripción</label>
        <textarea name='prodDescription' id='prodDescription' cols='30' rows='10'
            class='product__textarea'><?php echo $product['productDescription'];?></textarea>
        <div class='product__details--subgrid'>
            <label for='prodBrand'>Marca</label>
            <input type='text' name='prodBrand' id='prodBrand' class='product__input'
                value='<?php echo $product['productBrand'];?>'>
            <label for='prodModel'>Modelo</label>
            <input type='text' name='prodModel' id='prodModel' class='product__input'
                value="<?php echo $product['productModel'];?>">
        </div>
    </div>
    <div class='product__container--row product__images'>
        <label for='imgUpload'>Fotos</label>
        <input type='file' name='imgUpload' id='imgUpload' class='product__img' value='+'>
    </div>
    <div class='product__container--row'>
        <input type='radio' name='prodState' value='true' id='prodState1' checked>
        <label for="prodState1">ACTIVADA</label>
        <input type='radio' name='prodState' value='false' id='prodState2'>
        <label for="prodState2">DESACTIVADA</label>
    </div>
    <div class='product__container--row product__container--lastrow'>
        <input type='submit' name='btnEditProduct' class='product__btn'>
    </div>
</form>
<?php
}
?>
<?php ob_end_flush(); ?>