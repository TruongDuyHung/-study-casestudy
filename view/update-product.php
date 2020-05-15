<?php
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
<div class="col-md-12">
    <div class="card mt-5">
        <div class="card-header">
            Product
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input name="name" type="text" value="<?php echo $product['Name'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Type</label>
                    <input name="type" type="text" value="<?php echo $product['Type'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input name="price" type="text" value="<?php echo $product['Price'] ?>" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
