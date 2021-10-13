<?php
    class Product extends Database {
        public static $listProd;
        public static $listRows;
        public static $privilege;

        public static function renderAll($privilege) {
            self::$privilege = $privilege;
            self::$listProd = self::fetchAll('products2');
            self::$listRows = self::$listProd->num_rows;
            include_once "./views/productList.php";
        }

        public static function renderByCategory($privilege) {
            self::$privilege = $privilege;
            self::$listProd = self::fetchOneByValue('products2','categoryId',$_GET['categoryId']);
            self::$listRows = self::$listProd->num_rows;
            include_once "./views/productList.php";
        }
        // public static function 
        
    }

?>