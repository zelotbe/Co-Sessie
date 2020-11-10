<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: ../index.html");
exit;
?>

<!-- Source PHP
https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php
-->
