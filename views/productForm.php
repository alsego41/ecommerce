<?php 
    ob_start();
    if (isset($_GET['editpid'])) {
        $flag = 1;
        $prod = Product::$currProd;
    } else {
        $flag = 0;
    }
?>

<form class='productFicha__container' action='' method='post'>
    <div class='product__container--row'>
        <label for='prodName'>Nombre del Producto</label>
        <input type='text' name='prodName' id='prodName' class='product__input'
            value="<?php if ($flag == 1) echo $prod['productName'] ?>">
    </div>
    <div class='product__container--row product__container--priceCat'>
        <label for='categories'>Categoría</label>
        <select name='categories' id='productCategories' class='product__select'>;
            <?php
            // poner selected en la q es
                Category::fillList();
                while ($category = Category::$listCat->fetch_assoc()){
                    ?>
            <option value="<?php echo $category['categoryName'] ?>" <?php 
    if ($flag == 1) {
        if ($prod['categoryId'] == $category['categoryId']) {
            echo "selected";
        }
    }
?>><?php echo $category['categoryName']?></option>
            <?php
                };
            ?>
        </select>
        <label for='prodPrice'>Precio</label>
        <input type='number' step='any' min='0' value='<?php if ($flag == 1) echo $prod['productPrice'] ?>'
            name='prodPrice' class='product__input'>
    </div>
    <div class='product__container--row product__location'>
        <label for='prodStock'>Inventario</label>
        <input type='number' class='product__input' min='0' value='<?php if ($flag == 1) echo $prod['productStock'] ?>'
            name='prodStock'>
        <label for='prodUbication'>Ubicación</label>
        <input type='text' class='product__input' name='prodUbication'
            value="<?php if ($flag == 1) echo $prod['productUbication'] ?>">
    </div>
    <div class='product__container--row product__details'>
        <label for='prodDescription'>Descripción</label>
        <textarea name='prodDescription' id='prodDescription' cols='30' rows='10'
            class='product__textarea'><?php if ($flag == 1) echo $prod['productDescription'] ?></textarea>
        <div class='product__details--subgrid'>
            <label for='prodBrand'>Marca</label>
            <input type='text' name='prodBrand' id='prodBrand' class='product__input'
                value="<?php if ($flag == 1) echo $prod['productBrand'] ?>">
            <label for='prodModel'>Modelo</label>
            <input type='text' name='prodModel' id='prodModel' class='product__input'
                value="<?php if ($flag == 1) echo $prod['productModel'] ?>">
        </div>
    </div>
    <div class='product__container--row product__images'>
        <label for='imgUpload'>Fotos</label>
        <input type='file' name='imgUpload' id='imgUpload' class='product__img' value='+'>
    </div>
    <div class='product__container--row'>
        <input type='radio' name='prodState' value='true' id='prodState1'
            <?php if ($flag == 1) { if ($prod['productState'] == 1) echo 'checked'; else echo "";} ?>>
        <label for="prodState1">ACTIVADA</label>
        <input type='radio' name='prodState' value='false' id='prodState2'
            <?php if ($flag == 1) { if ($prod['productState'] == 0) echo 'checked'; else echo "";}; ?>>
        <label for="prodState2">DESACTIVADA</label>
    </div>
    <div class='product__container--row product__container--lastrow'>
        <input type='submit' name='btnAddProduct' class='product__btn'>
    </div>
</form>

<?php
if (isset($_POST['btnAddProduct'])) {
    ob_end_clean();
}
?>