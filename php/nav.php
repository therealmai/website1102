
<?php 

if(isset($_POST['logout'])){
    $logout = $_POST['logout'];
    
    
    session_destroy();
    header("location: ../php/login.php");
    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<img class="logo" src="..//img/aquapro.png">
<form method="POST" action="">
        <nav>
        
            <ul class="nav_links">
                <li><a style="text-decoration: none;" href="index.html">Home</a></li>
                <li><a style="text-decoration: none;" href="services.html">Services</a></li>
                <li><a style="text-decoration: none;" href="products.html">Products</a></li>
                <li><a style="text-decoration: none;" href="waterfacilities.html">Water Facilities</a></li>
                <li><a style="text-decoration: none;" href="contact us.html">Contact Us</a></li>
                <li><a style="text-decoration: none;" href="about us.html">About Us</a></li>
                <li><a style="text-decoration: none;"><button type="submit" name="logout"><img src="../img/img_515259.png" width="25px"  alt="logout" value="logout"></a></li>
                
            </ul>
            
        </nav>
        </form>
</body>
</html>
