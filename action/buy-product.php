<?php
include "../model/DBconnection.php";
include "../model/ProductDB.php";
include "../controller/Product_Controller.php";
use controller\Product_Controller;
$id= $_REQUEST['id'];
$name= $_REQUEST['name'];
$type= $_REQUEST['type'];
$review= $_REQUEST['reviews'];
$reviews = new Product_Controller();
$reviews->addReviews($id,$name,$type,$review);
header('location:../successLogin/user.php');