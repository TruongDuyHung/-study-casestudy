
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/css.css">
</head>
<body class="setbg">
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <a class="navbar-brand" href="../successLogin/admin.php">Reload</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown col-md-2">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">Manager
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="ul">
                    <a class="dropdown-item" href="../view/add-product.php">Add Product</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../successLogin/listproduct.php">Show Product</a>
            </li>
            <li class="nav-item dropdown col-md-2">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">Hi admin!
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="ul">
                    <a class="dropdown-item" href="#">Change Password</a>
                    <a class="dropdown-item" href="#">Log Out</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<?php include "../script/bootrapscript.php"?>
?>
</body>
</html>
