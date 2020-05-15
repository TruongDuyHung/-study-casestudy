<?php

namespace controller;

use moddel\DBconnection;
use Model\UserDB;

session_start();

class User_Controller
{
    public $user;

    public function __construct()
    {
        $connect = new DBconnection('mysql:host=localhost;dbname=classicmodels', 'root', '123465');
        $this->user = new UserDB($connect->connect());
    }

    public function checklogin()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if($_REQUEST['request']=="Login"){
                $email = $_REQUEST['email'];
                $password = $_REQUEST['password'];
                $result = $this->user->getUser($email, $password);
                if (!$result) {
                    $_SESSION['login-fail'] = "Login khong thanh cong";
                    header('location:index.php');
                } elseif ($email === 'this.mymail9x@gmail.com') {
                    $_SESSION['successlogin'] = " Welcome ADMIN";
                    header('location:successLogin/admin.php');
                } else {
                    $_SESSION['user'] = $email;
                    header('location:successLogin/user.php');
                }
            }elseif ($_REQUEST['request']=="Register"){
                $this->register();
            }

        }
    }
    public function register()
    {
            $email = $_REQUEST['email1'];
            $name = $_REQUEST['fullname'];
            $password = $_REQUEST['password1'];
            $this->user->addUser($email, $name, $password);
            $_SESSION['register'] = "$email";
    }
}