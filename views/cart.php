<div class="cart__container">
    <div class="product__cart--container">
        <?php
    $i=0;
    $totalPrice=0;
    foreach (Product::$listProd as $product) {
        $totalPrice += $product['productPrice'] * Product::$qtySelectedOnes[$i];
    ?>

        <div class="product__cart--box">
            <img src="https://www.amd.com/system/files/styles/992px/private/2019-06/238593-ryzen-3-vega-pib-left-facing-1260x709_0.png?itok=o-efjbjS"
                alt="product-<?php echo $product['productId']; ?>-img" class='product__cart--img'>
            <div class="product__cart--main">
                <p class="product__cart--text product__cart--title"><?php echo $product['productName']; ?></p>
                <p class="product__cart--text product__cart--price">Precio unitario: AR$
                    <?php echo $product['productPrice']; ?></p>
            </div>
            <div class="product__cart--actions">
                <!-- <p class="product__cart--text product__cart--qty"></p> -->
                <input type="number" name="product-<?php echo $product['productId']; ?>-qty"
                    id="product-<?php echo $product['productId']; ?>-qty"
                    value='<?php echo Product::$qtySelectedOnes[$i]; $i++; ?>' min='0'
                    max='<?php echo $product['productStock']; ?>'
                    onchange="editQty(<?php echo $product['productId']; ?>)">
                <button class='product__cart--delete' onclick="removeProduct(<?php echo $product['productId']; ?>)"><i
                        class="bi bi-trash"></i></button>
            </div>
        </div>

        <?php
}
?>
    </div>
    <div class="cart__price--block">
        <div class="cart__price--container">

            <p class="cart__price--total">AR$ <?php echo $totalPrice; ?></p>
            <?php
    $i=0;
    foreach (Product::$listProd as $product) {
        ?>
            <div class="cart__price--subtotal">
                <p class="cart__price--prodQty"><?php echo Product::$qtySelectedOnes[$i]; $i++; ?>x</p>
                <p class="cart__price--prodName"><?php echo $product['productName']; ?></p>
                <p class="cart__price--prodPrice"><?php echo $product['productPrice']; ?></p>
            </div>
            <?php
    }
        ?>
            <button>Checkout</button>
        </div>
    </div>
</div>