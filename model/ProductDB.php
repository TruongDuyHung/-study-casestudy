<?php


namespace Model;

use Model\Product;

class ProductDB
{
    protected $connect;

    public function __construct($connect)
    {
        $this->connect = $connect;
    }

    public function getAllProduct()
    {
        $sql = "SELECT productCode as ID,productName as Name,productLine as Type,productDescription as Description,buyPrice as Price FROM products";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        $products = $stmt->fetchAll();
        return $products;
    }
}