<?php
include("config.php");

// session_start();

if(isset($_POST['login'])) {
    // username and password sent from form

    $myusername = $_POST['email'];
    $mypassword = $_POST['password'];

    $sql = "SELECT id FROM admin_info WHERE admin_email = '$myusername' and admin_password = '$mypassword'";
    $result = $link->query($sql);
    $row = $result->fetch_assoc();
    print_r($row);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if($row["id"] != '') {
        $_SESSION['login_user'] = $myusername;
        header("location: dashboard.php");
    }else {
        $error = "Your Login Name or Password is invalid";
    }
}
?>
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Admin Login</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="css/login.css">
    <!-- <script src="login.js"></script> -->
</head>
<body>
    <div class="container">
        <form method="POST">
            <h1 class="form__title">Admin Login</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Email" name="email">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Password" name="password">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit" name="login">Continue</button>
        </form>
    </div>
</body>
