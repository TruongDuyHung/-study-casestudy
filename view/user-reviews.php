<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="../css/cssadd.css">
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="setbg">
<div class="container">
    <div class="main">
        <div class="main-center">
            <h2>Product</h2>
            <form class="" method="post" action="../action/buy-product.php">
                <div class="form-group">
                    <label for="name">Code</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="id" id="name" placeholder="Enter Product Code"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Name</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="name" placeholder="Enter Product Name"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="username">Type</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="type" placeholder="Enter Product Type"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="username">Commnent</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="reviews" placeholder="Enter your reviews"/>
                    </div>
                </div>
                <button type="submit" class="btn-success">Buy</button>

            </form>
        </div><!--main-center"-->
    </div><!--main-->
</div><!--container-->
</body>
</html>
