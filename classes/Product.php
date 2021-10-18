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

        public static function create($data) {
            $strColumns = "(productName, productStock, productState, categoryId, productBrand, productModel, productUbication, productDescription, productPrice)";
            $strValues = $data;
            $id = self::createRow('products2', $strColumns, $strValues);
            return $id;
        }

        public static function getFormData() {
            Category::fillList();
            $lista = Category::$listCat;
            while ($category = $lista->fetch_assoc()) {
                if ($category['categoryName'] == $_POST['categories']){
                    $categoryId = $category['categoryId'];
                }
            }
            $name = $_POST['prodName'];
            $stock = (int)$_POST['prodStock'];
            if ($_POST['prodState'] == 'true'){
                $state = 1;
            } else {
                $state = 0;
            }
            $brand = $_POST['prodBrand'];
            $model = $_POST['prodModel'];
            $ubication = $_POST['prodUbication'];
            $description = $_POST['prodDescription'];
            $price = $_POST['prodPrice'];
            $strValues = "('$name', '$stock', '$state', '$categoryId', '$brand', '$model', '$ubication', '$description', '$price')";
            return $strValues;
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