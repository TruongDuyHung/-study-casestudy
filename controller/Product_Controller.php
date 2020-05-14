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
}