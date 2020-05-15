<?php


namespace controller;

session_start();

use moddel\DBconnection;
use Model\ProductDB;
use Model\Product;

class Product_Controller
{
    public $user;

    public function __construct()
    {
        $connect = new DBconnection('mysql:host=localhost;dbname=classicmodels', 'root', '123465');
        $this->user = new ProductDB($connect->connect());
    }

    public function index()
    {
        $products = $this->user->getAllProduct();
        include '../view/list-product.php';
    }

//    public function updateProduct($id)
//    {
//        include "../view/update-product.php";
//        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//            $name = $_REQUEST['name'];
//            $type = $_REQUEST['type'];
//            $price = $_REQUEST['price'];
//            $id1 = $id;
//        }
//
//    }

    public function searchProduct()
    {
        $keyword = $_REQUEST['keyword'];
        return $this->user->search($keyword);
    }

    public function delete($code)
    {
        $this->user->deleteDB($code);
    }
}