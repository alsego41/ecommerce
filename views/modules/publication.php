<?php 
    function renderPublication($product){
        echo "
        <div class='publication__main--header'>
            <div class='publication__images'>
            </div>
            <div class='publication__details--head'>
                <p>$product[productName]</p>
                <p>$product[productDescription]</p>
            </div>
            <div class='publication__cart'>
                <p>$product[productPrice]</p>
                <p>Qty</p>
                <p>$product[productStock]</p>
            </div>
        </div>";
    }
?>

<!-- <img src='main.jpg' alt=''>
        <img src='others.jpg' alt=''> -->

<!-- <p>Buy options - cards, transfers, mp</p>
                <p>Shipping or other ways</p> -->