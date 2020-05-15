<?php
session_start();
include "../view/admin-index.php";
include "../controller/Product_Controller.php";
include "../model/ProductDB.php";
include "../model/DBconnection.php";
$_SESSION['admin']="admin";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
<script>  alert('Welcome <?php echo $_SESSION['successlogin']?>')</script>
