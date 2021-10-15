<?php
    class Category extends Database {
        public static $listCat;
        public static $currentCategory;

        public static function fillList() {
            self::$listCat = self::fetchAll('categories2');
        }

        public static function render() {
            self::fillList();
            include_once "./views/categoryList.php";
        }

        public static function checkName() {
            self::$currentCategory = self::fetchRowByValue('categories2', 'categoryId', $_GET['categoryId'])->fetch_assoc();
            return self::$currentCategory['categoryName'];
        }
    }
    
?>