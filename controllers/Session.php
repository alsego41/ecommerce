<?php
    class Session {
        public static function check() {
            // session_start();
            if (isset($_SESSION['logged'])){

                if ($_SESSION['logged'] == 'true') {
                    if ($_SESSION['user_agent'] == $_SERVER['HTTP_USER_AGENT']){
                        $session_name = 'PHPSESSID';
                        if (array_key_exists($session_name, $_COOKIE)) {
                            $session_id = $_COOKIE[$session_name];
                            if ($session_id != session_id()){
                                return 0;                
                            } else return 1;
                        } 
                        return 1;
                    } else {
                        return 0;
                    }
                } else {
                    return 0;
                }
            } else {
                return 0;
            }
        }

        public static function createNew($user) {
            session_start();
            $_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
            $_SESSION['logged'] = 'true';
            $_SESSION['user_name'] = $user;
            session_regenerate_id();
        }
    }
?>