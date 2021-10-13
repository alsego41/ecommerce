<?php
    class Product extends Database {
        public static $listProd;
        public static $listRows;
        public static $privilege;
        public static $qtySelectedOnes;

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

        public static function renderSelected($ids) {
            // $ids = array_unique($ids);
            $ids = array_count_values($ids);
            foreach ($ids as $key => $value) {
                self::$listProd[] = self::fetchOneByValue('products2','productId',$key)->fetch_assoc();
                self::$qtySelectedOnes[] = $value;
            }
            // print_r($ids);
            // for ($i=0; $i < count($ids); $i++) { 
            //     self::$listProd[] = self::fetchOneByValue('products2','productId',$ids[$i])->fetch_assoc();
            // }
            include_once "./views/cart.php";
            // transformar repetidos en contador de cantidad de productos
        }
        
    }

?>