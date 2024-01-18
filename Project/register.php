<?php
include("config.php");
if(isset($_POST['register'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

    $sql = "INSERT INTO customers_info (Customer_username, Customer_email, Customer_password) VALUES ('".$username."', '".$email."', '".$password."')";

	if ($link->query($sql) === TRUE) {
	    $message = "New record created successfully";
	  header("location: login.php");
	} else {
	  
	}
   
}
?>
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Sign Up Form</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <?php echo $message; ?>
        <form class="form" id="createAccount" method="POST">
            <h1 class="form__title">Create Account</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" id="signupUsername" class="form__input" autofocus placeholder="Username" name="username">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Email Address" name="email">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Password" name="password">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Confirm password" name="confirm_password">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit" name="register">Continue</button>
            <p class="form__text">
                <a class="form__link" href="login.php" id="linkLogin">Already have an account? Sign in</a>
            </p>
        </form>
    </div>
</body>
