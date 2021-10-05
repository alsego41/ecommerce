<?php 
    require_once "../views/modules/pageHead.php";
    // head('Producto - Administrador');
    // echo var_dump($_GET);
    if (isset($_GET['preview'])){
        // echo "<p>Preview</p>";
        if (isset($_GET['prodId'])){
            // head("Producto - Administrador");
            include('../models/queryProducts.php');
            include('../views/modules/publication.php');
            renderPublication(mysqli_fetch_assoc(fetchOneProduct($_GET['prodId'])));
        }
    } else {
        echo "<p>NO Preview</p>";

    }
?>