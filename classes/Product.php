<?php
    class Product extends Database {
        public static $listProd;
        public static $listRows;
        public static $privilege;
        public static $qtySelectedOnes;
        public static $currProd;

        public static function renderAll($privilege) {
            self::$privilege = $privilege;
            self::$listProd = self::fetchAll('products2');
            self::$listRows = self::$listProd->num_rows;
            include_once "./views/productList.php";
        }

        public static function renderByCategory($privilege) {
            self::$privilege = $privilege;
            self::$listProd = self::fetchRowByValue('products2','categoryId',$_GET['categoryId']);
            self::$listRows = self::$listProd->num_rows;
            include_once "./views/productList.php";
        }

        public static function renderSelected($ids) {
            $ids = array_count_values($ids);
            foreach ($ids as $key => $value) {
                self::$listProd[] = self::fetchRowByValue('products2','productId',$key)->fetch_assoc();
                self::$qtySelectedOnes[] = $value;
            }
            include_once "./views/cart.php";
        }

        public static function renderPublication($id) {
            self::$currProd = self::fetchRowByValue('products2','productId',$id)->fetch_assoc();
            include_once "./views/publication.php";
        }

        public static function renderForm() {
            include_once "./views/productForm.php";
        }

        public static function showOptions() {
            include_once './views/publicationOptions.php';
        }

        public static function create() {
            include_once './views/productform.php';
            // self::createRow();
        }

        public static function edit($id) {
            self::$currProd = self::fetchRowByValue('products2','productId',$id)->fetch_assoc();
            include_once './views/productform.php';
            // self::updateRow();
        }

        public static function delete($id) {
            self::deleteRow('products2', 'productId', $id);
        }
        
    }

?>