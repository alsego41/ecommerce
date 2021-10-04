<?php
    function renderProduct($products){
        while ($result = mysqli_fetch_assoc($products)){
        if ($result['productState'] == 'true'){
            $state = 'ACTIVADO';
        } else $state = 'DESACTIVADO';
        echo "
        <div class='products__box'>
            <p class='products__maintext'>$result[productName]</p>
            <div class='products__actions'>
                <p class='products__actions--text'>$state</p>
                <p class='products__actions--text'>DETALLES</p>
                <p class='products__actions--text'>ELIMINAR</p>
            </div>
            <div class='products__stock'>
                <p class='products__stock--text'>-</p>
                <p class='products__stock--text'>$result[productStock]</p>
                <p class='products__stock--text'>+</p>
            </div>
        </div>
        ";}
    }
?>
