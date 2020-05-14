<?php
include "../controller/Product_Controller.php";
include "../model/ProductDB.php";
include "../model/DBconnection.php";
include "../model/Product.php";
use Model\ProductDB;
use moddel\DBconnection;
use Model\Product;
use controller\Product_Controller;
$products1= new Product_Controller();
$products1->index();

?>

