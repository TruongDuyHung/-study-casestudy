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

    public function indexuser()
    {
        $products = $this->user->getAllProduct();
        include '../view/list-product-user.php';

    }

    public function getProduct($id)
    {

        return $this->user->getProduct1($id);

//        include "../view/update-product.php";
    }

    public function updateProductToDB($id,$name,$type,$price)
    {
        $this->user->updateProduct($id,$name,$type,$price);

    }

    public function searchProduct()
    {
        $keyword = $_REQUEST['keyword'];
        return $this->user->search($keyword);
    }

    public function delete($code)
    {
        $this->user->deleteDB($code);
    }

    public function add($id, $name, $type, $price)
    {
        $this->user->addProduct($id, $name, $type, $price);
    }

    public function addReviews($id, $name, $type, $reviews)
    {
        $this->user->addReview($id, $name, $type, $reviews);
    }
}
