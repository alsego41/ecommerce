<?php ob_start();
function renderProduct($products, $qty){
    if ($qty > 0){ 
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
    while ($result = mysqli_fetch_assoc($products)){
        if ($result['productState'] == 1){
            $state = 'Activado';
            $textClass = 'active';
        } else {
            $state = 'Desactivado';
            $textClass = 'inactive';
        }
?>

<div class='products__box'>
    <p class='products__maintext'><?php echo $result['productName']?></p>
    <div class='products__actions'>
        <p class='products__actions--text products__actions--text<?php echo $textClass?> '><?php echo $state?></p>
        <p class='products__actions--text products__actions--clickable'>
            <a href='product.php?prodId=<?php echo $result['productId']?>&preview=true'>EDITAR</a>
        </p>
    </div>
    <div class='products__stock'>
        <p class='products__stock--text'><?php echo $result['productStock']?></p>
    </div>
    <p class='products__price'><?php echo $result['productPrice']?></p>
</div>

<?php
}
} else {
?>

<div class='products__box'>
    <p class='products__maintext'>Esta categoría está vacía!</p>
</div>

<?php
}
} ob_end_flush();
?>