<?php
include "../model/DBconnection.php";
include "../model/ProductDB.php";
include "../controller/Product_Controller.php";
use  controller\Product_Controller;
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $id = $_REQUEST['id'];
    $product = new Product_Controller();
    $result = $product->getProduct($id);
    include "../view/update-product.php";
}