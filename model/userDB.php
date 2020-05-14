<?php

namespace Model;

class UserDB
{
    protected $connect;

    public function __construct($connect)
    {
        $this->connect = $connect;
    }
}
?>