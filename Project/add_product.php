<?php
include("config.php");
if(isset($_POST['add'])) {

	$name = $_POST['name'];
	$price = $_POST['price'];
	$image = $_POST['image'];

    $sql = "INSERT INTO product (product_name, product_price, product_image) VALUES ('".$name."', '".$price."', '".$image."')";

	if ($link->query($sql) === TRUE) {
	    $message = "New record created successfully";
	  header("location: Homepage.php");
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
    <!-- <script src="login.js"></script> -->
</head>
<body>
    <div class="container">
        <form method="POST">
            <h1 class="form__title">Admin Add Product</h1>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Product Name" name="name">
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Product Price" name="price">
            </div>
            <div class="form__input-group">
                <input type="file" class="form__input" name="image">
            </div>
            <button class="form__button" type="submit" name="add">Add Product</button>
        </form>
    </div>
</body>
