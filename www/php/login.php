<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Gelieve een gebruikersnaam in te vullen.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Gelieve uw wachtwoord in te vullen.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM login WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "Het wachtwoord is ongeldig.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "Geen account gevonden met deze gebruikersnaam";
                }
            } else{
                echo "Oops! Er is iets fout gelopen. Probeer later opnieuw.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>


<!-- Source PHP
https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php
-->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Inloggen - Flac Hoppeland</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/loginStyle.css">
    <link rel="stylesheet" href="../css/common.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h2>Inloggen</h2>
                        <p>Gelieve aan te melden</p>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                                <label>Gebruikersnaam</label>
                                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                                <span class="help-block"><?php echo $username_err; ?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                <label>Wachtwoord</label>
                                <input type="password" name="password" class="form-control">
                                <span class="help-block"><?php echo $password_err; ?></span>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Login">
                            </div>
                            <div id="formFooter">
                                <p>Geen account? <a href="register.php">Registreer hier</a>.</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/jquery-3.5.1.slim.min.js"></script>
</body>

</html>
