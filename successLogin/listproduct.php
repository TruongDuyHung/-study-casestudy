<?php
session_start();
include "../controller/Product_Controller.php";
include "../model/ProductDB.php";
include "../model/DBconnection.php";
include "../model/Product.php";
use controller\Product_Controller;
if (isset($_SESSION['admin'])) {
    include "../view/admin-index.php";
    $products1 = new Product_Controller();
    $products1->index();
}elseif (isset($_SESSION['checkuser'])) {
    include "../view/user-index.php";
    $products1 = new Product_Controller();
    $products1->indexuser();
}
include "../script/bootrapscript.php";



if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $products1->updateProduct($id);
}
?>

