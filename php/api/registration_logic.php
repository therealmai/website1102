<?php
    require 'database_connect.php';
   //  var_dump($_POST);
    if(isset($_POST['submit'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $phone_num = $_POST['phone'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost' => 10]);
            $confirm_password = password_hash($_POST['confirmPassword'], PASSWORD_BCRYPT,['cost'=> 10]);

            $sql = "INSERT INTO users (first_name,last_name,email_address,phone_number,password,confirm_password) 
                                VALUES ('$firstname','$lastname','$email','$phone_num','$password','$confirm_password')";
            // var_dump(mysqli_query($mysqli, $sql));
            if (mysqli_query($mysqli, $sql)) {
                header("location: ../login.php");
            } else {
            echo "Error: " . $sql . ":-" . mysqli_error($mysqli);
            }
            mysqli_close($mysqli);
    };

?>


<!-- if(isset($_POST['firstname'])&& isset($_POST['lastname'])&&isset($_POST['email'])&&isset($_POST['phone'])&&isset($_POST['password'])&&isset($_PO~