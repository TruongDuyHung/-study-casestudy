<?php
namespace Controller;
use Moddel\DBconnection;
use Model\UserDB;

class User_Controller
{
    public $user;

    public function __construct()
    {
        $connect = new \Model\DBconnection('mysql:host=localhost;dbname=classicmodels', 'root', '123465');
        $this->user = new UserDB($connect->connect());
    }
}