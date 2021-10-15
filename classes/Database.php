<?php   
    class Database {
        // public static $host = 'remotemysql.com';
        // public static $user = 'B1McginKUR';
        // public static $psw = '7C7u7waOgt';
        // public static $dbname = 'B1McginKUR';
        public static $port = 3306;

        public static $host = 'localhost';
        public static $user = 'root';
        public static $psw = '';
        public static $dbname = 'ecommerce';

        public static function connect() {
            $connection = mysqli_connect(self::$host, self::$user, self::$psw, self::$dbname);
            return $connection;
        }

        public static function closeConnection($connection) {
            return mysqli_close($connection);
        }

        public static function fetchAll($tableName) {
            $conn = self::connect();
            $query = "SELECT * FROM $tableName";
            $data = $conn->query($query);
            self::closeConnection($conn);
            return $data;
        }

        public static function fetchRowByValue($tableName, $columnName, $value){
            $conn = self::connect();
            $query = "SELECT * FROM $tableName WHERE BINARY $columnName='$value'";
            $data = $conn->query($query);
            self::closeConnection($conn);
            return $data;
        }

        public static function createRow($tableName, $columns, $values) {
            $conn = self::connect();
            $query = "INSERT INTO $tableName ($columns) VALUES ($values)";
            $data = $conn->query($query);
            self::closeConnection($conn);
            return $data;
        }

        public static function deleteRow($tableName, $columnName, $value) {
            $conn = self::connect();
            $query = "DELETE FROM $tableName WHERE BINARY $columnName=$value";
            $data = $conn->query($query);
            self::closeConnection($conn);
            return $data;
        }

        public static function updateRow($tableName, $columns, $values) {
            $conn = self::connect();
            $updateString = "";
            for ($i=0; $i < count($columns); $i++) { 
                $updateString .= "$columns[$i]=$values[$i]";
            }
            $query = "UPDATE $tableName SET $updateString";
            $data = $conn->query($query);
            self::closeConnection($conn);
            return $data;
        }
    }
?>