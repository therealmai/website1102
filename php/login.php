<?php
// Initialize the session
if(isset($_POST['submit'])){
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
 
// Include config file
require_once "api/database_connect.php";
 
// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["email"]))){
        $username_err = "Please enter username.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT `user_id`, `email_address`, `password` FROM `users` WHERE `email_address` = ?";
        
        if($stmt = mysqli_prepare($mysqli, $sql)){
            // Set parameters
            $param_email = $email;
            
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result

                // echo "Naabot na diri";
                mysqli_stmt_store_result($stmt);
                // var_dump(mysqli_stmt_store_result($stmt));
                var_dump($stmt);
                // var_dump(mysqli_stmt_num_rows($stmt));
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables but not yet stored
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    
                    // stmt_fetch stores the bind_result to the variables declared
                    if(mysqli_stmt_fetch($stmt)){
                        // var_dump($id, $username, $hashed_password);
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            /**
                             * *session_start() is unnecessary because there's already one 
                             * *in the beginning of the file
                             */
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: index.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($mysqli);
}}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equic = "X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <title>AquaPro</title>
</head>
<body>
  <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row"> <img src="../img/aquapro.png" class="logo"> </div>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="../img/login.png" class="image"> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row mb-4 px-3">
                        <h2 class="mb-0 mr-4 mt-2" style="font-family: Roboto Condensed; font-size: 48px;">Sign in:</h2>
                <form action="" method="POST">   
    
                    </div>
                    <div class="row px-3 mb-4">
                        <div class="line"></div> <small class="or text-center">Or</small>
                        <div class="line"></div>
                    </div>

                    <?php if (!empty($login_err)) { ?>
                    <div class="row px-3 mb-4">
                        <div class="bg-danger text-white px-4 py-3">
                            <?php echo $login_err; ?>
                        </div>
                    </div>
                    <?php } ?>

                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Email Address</h6>
                        </label> <input class="mb-4" type="text" id="email" name="email" placeholder="Enter a valid email address" name="email">    </div>

                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Password</h6>
                        </label> <input type="password" id="password" name="password" placeholder="Enter password" name="password">            </div>




                    <div class="row px-3 mb-4">
                        <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> <label for="chk1" class="custom-control-label text-sm">Remember me</label> </div> 
                    </div>
                    <div class="row mb-3 px-3"> <input type="submit" value="Login" name="submit" class="btn btn-blue text-center"></button> </div>
                    <div class="row mb-4 px-3"> <small class="font-weight-bold">Don't have an account? <a href="registration.html" class="text-danger ">Register</a></small> </div>
                </form>       
                </div>  
            </div>
        </div>
        <div class="bg-blue py-4">
            <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2020. All rights reserved.</small>
                <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    
</body>
</html>