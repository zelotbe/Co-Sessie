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
    <link rel="stylesheet" href="../css/quintin.css">

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>

<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>Hallo, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welkom bij FLAC Hoppeland!</h1>
            <br>
            <h3>Hier kan je je inschrijven of gegevens aanpassen.</h3>
        </div>
    </div>
    <div class="container w-30 mx-auto">
        <p>
            <a href="inschrijven.php" class="btn btn-primary">Inschrijven tot de club</a>
            <a href="reset-password.php" class="btn btn-warning">Wachtwoord resetten</a>
            <a href="logout.php" class="btn btn-danger">Uitloggen</a>
        </p>
    </div>
    <script src="../js/jquery-3.5.1.slim.min.js"></script>
</body>

</html>
