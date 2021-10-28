<?php
    require_once "./controllers/autoload.php";
    Session::logOut();
    header('Location: ./')
?>