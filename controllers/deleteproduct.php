<?php 
    require_once "sessions.php";
    if (!isLogged()){
        header('location: login.php');
    } 
    else 
    {
        include('../models/deleteProduct.php');
        header('location: adminLandingPage.php');
    }
?>