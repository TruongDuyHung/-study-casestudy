<?php
include "../model/DBconnection.php";
include "../model/ProductDB.php";
include "../controller/Product_Controller.php";
use controller\Product_Controller;

$code = $_REQUEST['id'];
$delete = new Product_Controller();
$delete->delete($code);
header('location:../successLogin/listproduct.php');
?>