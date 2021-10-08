<?php 
    require_once "sessions.php";
    if (!isLogged()){
        echo "NOT Logged";
        header('location: login.php');
    } 
    else 
{
    require_once "../views/modules/pageHead.php";
    // require_once "../views/modules/header.php";
    require_once "../views/modules/navbar.php";
    // head('Producto - Administrador','');
    // echo var_dump($_GET);
    if (isset($_GET['preview'])){
        // echo "<p>Preview</p>";
        if (isset($_GET['prodId'])){
            // head("Producto - Administrador");
            include('../models/queryProducts.php');
            include('../views/modules/publication.php');
            renderPublication(mysqli_fetch_assoc(fetchOneProduct($_GET['prodId'])));
            include('../views/modules/adminPublActions.php');
            showAdminActions($_GET['prodId']);
        }
    } else {
        echo "<p>NO Preview</p>";

    }}
?>