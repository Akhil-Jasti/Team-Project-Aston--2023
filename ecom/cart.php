<?php
include("config.php");
// print_r($_SESSION["shopping_cart"]);
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
// echo $cart_count;
}

$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
    print_r('remove');
    if(!empty($_SESSION["shopping_cart"])) {
        print_r($_SESSION["shopping_cart"]);
        unset($_SESSION['shopping_cart']);
        $status = "
        <div class='box' style='color:red;'>
            Product is removed from your cart!
        </div>";
    }
}


if (isset($_POST['action']) && $_POST['action']=="place_order"){
    $total_price = $_POST['total_price'];
    $customer_id = $_SESSION['login_user'];

    foreach ($_SESSION["shopping_cart"] as $product){
        $product_id = $product['product_id'];

        $sql = "INSERT INTO orders (product_id, customer_id) VALUES ('".$product_id."', '".$customer_id."')";
        $link->query($sql);

    }
    $sql2 = "INSERT INTO payment (customer_id, total_amount) VALUES ('".$customer_id."', '".$total_price."')";

    if ($link->query($sql2) === TRUE) {
        $message = "New record created successfully";
        unset($_SESSION['shopping_cart']);
        header("location: checkout.php");
    }
}
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
              integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
              crossorigin="anonymous"/>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
                integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
                crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
                integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
                crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/d1c2ea8b80.js" crossorigin="anonymous"></script>
        <title>Cart</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div class="">
            <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                    <a class="navbar-brand" href="#">
                        <!--<img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/ecommerce-website-logo-img.png" class="logo-nbs" />-->
                        GetMobile
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ml-auto">
                            <a class="nav-link active navbar-text-style-nbs" href="index.php">Home <span class="sr-only">(current)</span></a>
                            <a class="nav-link navbar-text-style-nbs" href="#sectionServices">Services</a>
                            <a class="nav-link navbar-text-style-nbs" href="#sectionProducts">Products</a>
                            <a class="nav-link navbar-text-style-nbs" href="#sectionExplore">Explore Deals & Offers</a>
                            <a class="nav-link navbar-text-style-nbs" href="#sectionTrendingBlogs">Trending Blogs</a>
                            <?php if(isset($_SESSION['login_user']) == ''){ ?>
                            <a class="nav-link navbar-text-style-nbs" href="login.php">Login</a>
                            <a class="nav-link navbar-text-style-nbs" href="register.php">Sign Up</a>
                            <?php }else{ ?>
                                <p class="mt-1">Welcome, <?php echo $_SESSION['login_user']; ?></p>
                                <a class="nav-link navbar-text-style-nbs" href="logout.php">Logout</a>
                            <?php } ?>
                        </div>
                    </div>
                </nav>
            </div>
            </div>
        </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-5">Cart</h1>
                <div class="cart">
                    <?php
                if(isset($_SESSION["shopping_cart"])){
                    $total_price = 0;
                ?>
                <table class="table">
                    <tbody>
                    <tr>
                        <td></td>
                        <td>ITEM NAME</td>
                        <td>ITEMS TOTAL</td>
                    </tr>
                    <?php
                    foreach ($_SESSION["shopping_cart"] as $product){
                    ?>
                    <tr>
                        <td><img src='images/<?php echo $product["product_image"]; ?>' width="50" height="40"/></td>
                        <td><?php echo $product["product_name"]; ?>
                        </td>
                        <td><?php echo "$".$product["product_price"]; ?></td>
                    </tr>
                    <?php
                    $total_price += ($product["product_price"]);
                    }
                    ?>
                    <tr>
                        <td colspan="5" align="right">
                            <strong>TOTAL: <?php echo "$".$total_price; ?></strong>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="row text-right">
                    <div class="col-12">
                        <form method='post'>
                            <input type='hidden' name='action' value="remove"/>
                            <button type='submit' class='remove btn btn-danger btn-sm mt-3'>Remove Items</button>
                        </form>
                        <form method='post'>
                            <input type='hidden' name='action' value="place_order"/>
                            <input type="hidden" name="total_price" value="<?php echo $total_price; ?>" />
                            <button type='submit' class='btn btn-success btn-sm mt-3'>Place Order</button>
                        </form>
                    </div>
                </div>
                <?php
                }else{
                    echo "<h3>Your cart is empty!</h3>";
                } ?>
            </div>
            </div>
            <div style="clear:both;"></div>
            <div class="message_box" style="margin:10px 0px;">
                <?php echo $status; ?>
            </div>
        </div>
    </div>
</body>
</html>

