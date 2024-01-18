<?php
include("config.php");
if(isset($_POST['add'])) {

	$name = $_POST['name'];
	$price = $_POST['price'];
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./images/" . $filename;

    $sql = "INSERT INTO products (product_name, product_price, product_image) VALUES ('".$name."', '".$price."', '".$filename."')";
    move_uploaded_file($tempname, $folder);
	if ($link->query($sql) === TRUE) {
	    $message = "New record created successfully";
	  header("location: index.php");
	} else {
	  
	}
   
}
?>
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Admin Add Product</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h3 class="text-center mb-3">Admin Panel</h3>
                <nav>
                    <a href="dashboard.php">Dashboard</a>
                    <a href="add_product.php">Add Product</a>
                    <a href="list_products.php">List Products</a>
                    <a href="orders.php">Orders</a>
                    <a href="logout.php">Logout</a>
                </nav>
            </div>
            <div class="col-8">
                <div class="admin-container">
                    <form method="POST" enctype="multipart/form-data">
                        <h1 class="form__title">Admin Add Product</h1>
                        <div class="form__input-group">
                            <input type="text" class="form__input" autofocus placeholder="Product Name" name="name">
                        </div>
                        <div class="form__input-group">
                            <input type="text" class="form__input" autofocus placeholder="Product Price" name="price">
                        </div>
                        <div class="form__input-group">
                            <input type="file" class="form__input" name="uploadfile">
                        </div>
                        <button class="form__button" type="submit" name="add">Add Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
