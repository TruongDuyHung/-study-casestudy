<?php
include "../model/DBconnection.php";
include "../model/ProductDB.php";
include "../controller/Product_Controller.php";
session_start();
use  controller\Product_Controller;
if ($_SERVER['REQUEST_METHOD'] =='POST') {
    $name= $_REQUEST['name'];
    $type= $_REQUEST['type'];
    $price= $_REQUEST['price'];
    if (isset($_SESSION['idupdate'])) {
        $id = $_SESSION['idupdate'];
    }
    $update= new Product_Controller();
    $update->updateProductToDB($id,$name,$type,$price);
    header('location:../successLogin/admin.php');
}