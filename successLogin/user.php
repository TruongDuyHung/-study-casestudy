<?php
session_start();
$_SESSION['checkuser']='check';
include "../view/user-index.php";