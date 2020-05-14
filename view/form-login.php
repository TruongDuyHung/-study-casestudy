<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/form-login.css">
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
                <input type="text" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="password">
                <input type="submit" value="Login">
            </div>
        </form>
        <form method="GET">
            <div class="register-show">
                <h2>REGISTER</h2>
                <input type="text" placeholder="Email" name="email1">
                <input type="text" placeholder="Full name" name="fullname">
                <input type="password" placeholder="Password" name="password1">
                <input type="submit" value="Register">
            </div>
        </form>
    </div>
</div>
<script src="script/index.js"></script>
</body>
</html>
