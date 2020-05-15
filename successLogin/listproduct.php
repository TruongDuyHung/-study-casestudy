<?php
include "../controller/Product_Controller.php";
include "../model/ProductDB.php";
include "../model/DBconnection.php";
include "../model/Product.php";
include "../view/admin-index.php";
include "../script/bootrapscript.php";
use Model\ProductDB;
use moddel\DBconnection;
use Model\Product;
use controller\Product_Controller;

$products1 = new Product_Controller();
$products1->index();
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $products1->updateProduct($id);
}
?>

