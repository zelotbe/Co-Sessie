<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


<!-- Source PHP
https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php
-->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to Flac Hoppeland</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/welcomeStyle.css">


    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>

<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
            <br>
            <h3>Manage your account details here</h3>
        </div>
    </div>
    <div class="container">
        <p>
            <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
            <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
        </p>
    </div>
    <script src="../js/jquery-3.5.1.slim.min.js"></script>
</body>

</html>
