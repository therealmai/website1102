
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equic = "X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/registration.css">
    <title>AquaPro</title>
</head>
<body>

    <section style>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light py-3">
            <div class="container">
                <a href="login.php" class="navbar-brand">
                    <img src="../img/aquaprowithtext.png" alt="logo" width="250" style="float: right;">
                </a>
            </div>
        </nav>
    </header>
    
    
    <div class="container">
        <div class="row py-5 mt-4 align-items-center">
            <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
                <h1 style="font-family: Roboto Condensed; font-size: 2.9vw">Create an Account</h1>
                <img src="../img/water_bowl_animation_2.gif" alt="" class="img-fluid mb-3 d-none d-md-block">
                
            </div>
    
            <!-- Registeration Form -->
            <div class="col-md-7 col-lg-6 ml-auto">
                <form action ="api/registration_logic.php" method="POST">
                    <div class="row">
    
                        <!-- First Name -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <img src="../img/user_icon.png" width="20">
                                </span>
                            </div>
                            <input id="firstName" type="text" name="firstname" placeholder="First Name" class="form-control bg-white border-left-0 border-md">
                        </div>
    
                        <!-- Last Name -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <img src="../img/user_icon.png" width="20">
                                </span>
                            </div>
                            <input id="lastName" type="text" name="lastname" placeholder="Last Name" class="form-control bg-white border-left-0 border-md">
                        </div>
    
                        <!-- Email Address -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <img src="../img/simple-email-icon-vector-free_129913.png" width="20">
                                </span>
                            </div>
                            <input id="email" type="email" name="email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md">
                        </div>
    
                        <!-- Phone Number -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <img src="../img/telephone-hi.png" width="20">
                                </span>
                            </div>
                            <select id="countryCode" name="countryCode" style="max-width: 80px" class="custom-select form-control bg-white border-left-0 border-md h-100 font-weight-bold text-muted">
                                <option value="">+63</option>
                                <option value="">+12</option>
                                <option value="">+10</option>
                                <option value="">+99</option>
                                <option value="">+14</option>
                               
                            </select>
                            <input id="phoneNumber" type="tel" name="phone" placeholder="Phone Number" class="form-control bg-white border-md border-left-0 pl-3">
                        </div>
    
    
            
    
                        <!-- Password -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <img src="../img/padlock-icon-rounded-BqfJzM-clipart.png" width="20">
                                </span>
                            </div>
                            <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md">
                        </div>
    
                        <!-- Password Confirmation -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <img src="../img/padlock-icon-rounded-BqfJzM-clipart.png" width="20">
                                </span>
                            </div>
                            <input id="password" type="password" name="confirmPassword" placeholder="Confirm Password" class="form-control bg-white border-left-0 border-md">
                        </div>
                        
                        <!-- Submit Button -->
                        <div class="form-group col-lg-12 mx-auto mb-0" id="submit" name="submit">
                                <input class = "btn btn-primary btn-block py-2" class="font-weight-bold" type="submit" name="submit" style="font-family:Roboto Condensed; font-weight: 700;"value="Create your account">
                                <!-- <span class="font-weight-bold">Create your account</span> -->
                            </div>
                        </div><br>
    
                        <!-- Already Registered -->
                        
                        <div class="text-center w-100">
                            <br>
                            <p class="text-muted font-weight-bold">Already Registered? <a href="login.php" class="text-primary ml-2">Login</a></p><br><br>
                        </div>
    
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>