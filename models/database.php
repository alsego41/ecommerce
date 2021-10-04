<?php   
    function connect(){
        $host = 'localhost';
        $user = 'root';
        $psw = '';
        $dbname = 'ecommerce';

        $connection = mysqli_connect($host, $user, $psw, $dbname);
        return $connection;
    }
?>