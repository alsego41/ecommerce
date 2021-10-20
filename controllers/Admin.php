<?php
    class Admin extends Database {
        public static $currState;

        public static function tryLogin($username, $psw) {
            $data = self::fetchRowByValue('admins', 'userName', $username);
            $data = $data->fetch_assoc();
            if ($data && $data != NULL) {
                if (password_verify($psw, $data['userPassword'])){
                    Session::createNew($username);
                    self::$currState = 1;
                    return 1;
                } else {
                    self::$currState = 0;
                    return 0;
                }
            } else {
                self::$currState = 0;
                return 0;
            }
        }
    }
?>