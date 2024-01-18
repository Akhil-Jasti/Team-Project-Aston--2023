<?php
include("config.php");
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
        <title>Checkout</title>
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

    <div class="row">
        <div class="col-12 mt-5 text-center">
            <div class="placeorder content-wrapper">
            <h1 class="mt-5">Your Order Has Been Placed</h1>
            <p>Thank you for ordering with us! We'll contact you by email with your order details.</p>
        </div>
        </div>
    </div>


</body>
</html>
