<?php
include "../model/DBconnection.php";
include "../model/ProductDB.php";
include "../controller/Product_Controller.php";
use controller\Product_Controller;
$id= $_REQUEST['id'];
$name= $_REQUEST['name'];
$type= $_REQUEST['type'];
$price= $_REQUEST['price'];
$product = new Product_Controller();
$product->add($id,$name,$type,$price);
header('location:../successLogin/admin.php');
?>