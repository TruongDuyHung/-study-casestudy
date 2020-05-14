<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/css.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="login-reg-panel">
    <div class="login-info-box">
        <h2>Have an account?</h2>
        <p>Fast login go go!</p>
        <label id="label-register" for="log-reg-show">Login</label>
        <input type="radio" name="active-log-panel" id="log-reg-show" checked="checked">
    </div>

    <div class="register-info-box">
        <h2>Don't have an account?</h2>
        <p>Fast register go go!</p>
        <label id="label-login" for="log-login-show">Register</label>
        <input type="radio" name="active-log-panel" id="log-login-show">
    </div>
    <div class="white-panel">
        <form method="POST">
            <div class="login-show">
                <h2>LOGIN</h2>
                <button type="button" class="btn btn-default btn-sm">
                    <span class="glyphicon glyphicon-user"></span>
                    User
                </button>
                <input type="email" placeholder="Email" name="email" required>
                <input type="password" placeholder="Password" name="password" required>
                <input name="request" type="submit" value="Login" required>
            </div>
        </form>
        <form method="POST">
            <div class="register-show">
                <h2>REGISTER</h2>
                <input type="email" placeholder="Email" name="email1" required>
                <input type="text" placeholder="Full name" name="fullname" required>
                <input type="password" placeholder="Password" name="password1" required>
                <input name="request" type="submit" value="Register" required>
            </div>
        </form>
    </div>
</div>
<script src="script/index.js"></script>
</body>
</html>
