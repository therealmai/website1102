<?php

session_start();
// Initialize the session
if(isset($_POST['submit'])){

 

 
// Include config file
require_once "database_connect.php";
 
 
            if (empty($_POST['email'])) {
            $errors[1] = 1;
            $errortxt = 'Username or email required';
           
        }

           else if (empty($_POST['password'])) {
                $errors[2] = 2;
                $errortxt = 'Password required';
                
            }
                $username = $_POST['email'];
                $password = $_POST['password'];

                
    // Validate credentials
    if (empty($errors) === TRUE) {
        // Prepare a select statement
        $sql = "SELECT `user_id`, `email_address`, `password` FROM `users` WHERE `email_address` = ?";
       
        if($stmt = mysqli_prepare($mysqli, $sql)){
           
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = $username;
            
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);

                // var_dump($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        // var_dump(password_verify($password, $hashed_password));
                        
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: ../index.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $errortxt = "Invalid username or password.";
                            echo "<script type='text/javascript'>alert('$errortxt');</script>";
                            header("Refresh:0 url=../login.php");
                            
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $errortxt = "Invalid username or password.";
                    echo "<script type='text/javascript'>alert('$errortxt');</script>";
                    header("Refresh:0 url=../login.php");
                   
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    else {
         echo "<script type='text/javascript'>alert('$errortxt');</script>";
         header("Refresh:0 url=../login.php");
        
    }
    // Close connection
    mysqli_close($mysqli);
}



?>

