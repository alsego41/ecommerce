<?php   
    function connect(){
        $host = 'remotemysql.com';
        $user = 'B1McginKUR';
        $psw = '7C7u7waOgt';
        $dbname = 'B1McginKUR';
        $port = 3306;

        $connection = mysqli_connect($host, $user, $psw, $dbname);
        return $connection;
    }
?>