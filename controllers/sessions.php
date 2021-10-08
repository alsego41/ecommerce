<?php
    session_start();
    function isLogged(){
        if ($_SESSION['logged'] == 'true') {
            if ($_SESSION['user_agent'] == $_SERVER['HTTP_USER_AGENT']){
                // echo "Is logged";
                $session_name = 'PHPSESSID';
                if (array_key_exists($session_name, $_COOKIE)) {
                    $session_id = $_COOKIE[$session_name];
                    if ($session_id != session_id()){
                        return 0;                
                    } else return 1;
                } return 1;
            } else {
                // echo $_SESSION['user_name'].' enter psw to re log';
                return 0;
            }
        } else {
            return 0;
            // echo 'go log in bro';
        }
    }
?>