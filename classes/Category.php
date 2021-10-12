<?php
    class Category extends Database {
        public static $listCat;

        public static function render() {
            self::$listCat = self::fetchAll('categories2');
            include_once "./views/categoryList.php";
        }

    }
?>