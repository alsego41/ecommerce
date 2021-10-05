<?php
    function renderProduct($products){
        if ($products){
            $qty = mysqli_num_rows($products);
            if ($qty > 0){
                while ($result = mysqli_fetch_assoc($products)){
                    if ($result['productState'] == 1){
                        $state = 'ACTIVADO';
                    } else $state = 'DESACTIVADO';
                    echo "
                    <div class='products__box'>
                        <p class='products__maintext'>$result[productName]</p>
                        <div class='products__actions'>
                            <p class='products__actions--text'><a href='?toggleStateId=$result[productId]'>$state</a></p>
                            <p class='products__actions--text'>DETALLES</p>
                            <p class='products__actions--text'>ELIMINAR</p>
                        </div>
                        <div class='products__stock'>
                            <p class='products__stock--text'>-</p>
                            <p class='products__stock--text'>$result[productStock]</p>
                            <p class='products__stock--text'>+</p>
                        </div>
                    </div>";
                }
            } else {
                echo "<div class='products__box'>
                <p class='products__maintext'>Esta categoría está vacía!</p>
                </div>";
            }
        }
    }
?>
