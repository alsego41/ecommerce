<?php
    class Admin extends Database {
        public static function tryLogin($username, $psw) {
            $data = self::fetchRowByValue('admins', 'userName', $username);
            $data = $data->fetch_assoc();
            if ($data && $data != NULL) {
                if (password_verify($psw, $data['userPassword'])){
                    Session::createNew($username);
                    echo "loggedin";
                    return 1;
                } else {
                    echo "wrong";
                    return 0;
                }
            } else {
                echo 'rip';
                return 0;
            }
        }
    }
?>