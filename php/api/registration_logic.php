<?php
     
     if(isset($_POST['submit'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $phone_num = $_POST['phone'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirmPassword'];

            $sql = "INSERT INTO users (first_name,last_name,email_address,phone_number,password,confirm_password) VALUES ('$firstname','$lastname','$email','$phone_num','$password','$confirm_password')";
            if (mysqli_query($conn, $sql)) {
                echo "New record has been added successfully !";
             } else {
                echo "Error: " . $sql . ":-" . mysqli_error($conn);
             }
             mysqli_close($conn);
     };

?>


<!-- if(isset($_POST['firstname'])&& isset($_POST['lastname'])&&isset($_POST['email'])&&isset($_POST['phone'])&&isset($_POST['password'])&&isset($_POST['passwordConfirmation'])) -->