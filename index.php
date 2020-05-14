<?php
include 'view/form-login.php';
session_start();

include 'model/DBconnection.php';
include 'model/UserDB.php';
include "controller/User_Controller.php";
use controller\User_Controller;
$controller = new User_Controller();
$controller->checklogin();

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

