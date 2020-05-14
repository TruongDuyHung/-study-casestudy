<?php

namespace Model;

class Product
{
    protected $id, $name, $type, $description, $price;

    public function __construct($id, $name, $type, $description, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->description = $description;
        $this->price = $price;
    }
}