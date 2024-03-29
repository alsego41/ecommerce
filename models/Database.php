<?php   
    class Database {
        public static $host = 'remotemysql.com';
        public static $user = 'ABh4HSq0IP';
        public static $psw = 'TxFCdhQrdg';
        public static $dbname = 'ABh4HSq0IP';
        public static $port = 3306;

        // public static $host = 'localhost';
        // public static $user = 'root';
        // public static $psw = '';
        // public static $dbname = 'ecommerce';

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
            // echo $query;
            $data = $conn->query($query);
            // echo var_dump($data);
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
            $query = "INSERT INTO $tableName $columns VALUES $values";
            $conn->query($query);
            $lastId = $conn->insert_id;
            self::closeConnection($conn);
            return $lastId;
        }

        public static function deleteRow($tableName, $columnName, $value) {
            $conn = self::connect();
            $query = "DELETE FROM $tableName WHERE BINARY $columnName=$value";
            $data = $conn->query($query);
            self::closeConnection($conn);
            return $data;
        }

        public static function updateRow($tableName, $columns, $values, $columnId, $id) {
            $conn = self::connect();
            $updateString = "";
            for ($i=0; $i < count($columns); $i++) { 
                $updateString .= "$columns[$i]=$values[$i],";
            }
            $updateString = substr($updateString, 0, -1);
            $query = "UPDATE $tableName SET $updateString WHERE $columnId=$id";
            $data = $conn->query($query);
            self::closeConnection($conn);
            return $data;
        }
    }
?>