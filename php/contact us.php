<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equic = "X-UA-Compatible" content="IE=edge">
    <title>AquaPro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="..//css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/section2.css">
    <link rel="stylesheet" type="text/css" href="../css/contact us.css">
</head>
<body>
    <section style="background-image: url(../img/asd.jpg); background-size: cover;background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;">
        <!--Navbar start-->
        <header>
            <?php include "nav.php" ?>
        </header>
    <br><br><br>
         <!--Navbar ends-->
    <h1 style="text-align: center; color: white; font-family: Roboto; font-size: 52px;font-weight: 500; font-size: 72px;">&nbsp;<span class = "txt-type" data-wait="3000" data-words='["CONTACT US"]'></span></h1>
    <p style="text-align: center; color: white; font-family: Roboto Condensed;font-size: 24px">We'd like to hear from you!</p>
    <p style="text-align: center; color: white; font-family: Roboto; font: 28px; font-weight: 100; font-size: 18px">______________________________</p>
    <br><br><br>
    </section>

    <section>
    <form>
      <div class="container">
        <div class="row">
            <h1 style="padding-top: 20px; padding-left: 39%; font-family: Roboto Condensed; color: #03045e;"><strong>Feel Free To Ask</strong></h1>
        </div>
        <div class="row">
        </div>
        <div class="row input-container">
            <div class="col-xs-12">
              <div class="styled-input wide">
                <input type="text" id="firstname" required  />
                <label>Name</label> 
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="styled-input">
                <input type="text" required id="email" />
                <label>Email</label> 
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="styled-input" style="float:right;">
                <input type="text" required id="phoneNumber"/>
                <label>Phone Number</label> 
              </div>
            </div>
            <div class="col-xs-12">
              <div class="styled-input wide">
                <textarea id="text" required></textarea>
                <label>Message</label>
              </div>
            </div>
            <div class="col-xs-12">
              <div class="btn-lrg submit-btn" id="submit">Send Message</div>
            </div>
        </div>
      </div>
    </form>
    </section>

  <section style="background-color: #caf0f8;">
    <h1 style="font-family: Roboto Condensed;padding-left: 100px; padding-top: 30px; color: #03045e; font-size: 56px;">Get In Touch</h1>
    <div class="maps" style="padding-left: 100px; padding-top: 20px; float: left;">
      <p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3924.384107957927!2d123.65400431474555!3d10.391035992583738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a972da2ce64883%3A0x579c29ff614c8838!2zMTDCsDIzJzI3LjciTiAxMjPCsDM5JzIyLjUiRQ!5e0!3m2!1sen!2sph!4v1607307696558!5m2!1sen!2sph" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </p>
    </div>

    <div style="padding-left: 53%; color: #03045e;"><br><br>
      <h3 style="font-family: Roboto Condensed; font-family: 48px;">
       <strong> Essential Information</strong>
      </h3><br>
      <h5 style="font-family: Roboto Condensed;">
        <strong>Location:</strong> Dumlog, Toledo City <br><br> <strong>Hotlines:</strong> 032-325-2374 <br><br> <strong>Cellphone Number:</strong> 0920 516 5409 <br><br><strong>Email:</strong> aquapro@gmail.com <br><br><br>
        <img src="../img/aquapro.png" width="150px">
      </h5><br><br>
    </div>

  </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   
    

    <script>
      $("#submit").click(function(){
        var name = $("#firstname").val();
        var email = $("#email"). val();
        var email = $("#phoneNumber"). val();
        var email = $("#text"). val();

      if(firstname == '' || phoneNumber == '' || email=='' || text == ''){
          swal({
              title: "Unsuccessful",
              text: "There are fields empty, please fill them!",
              icon: "error",
              button: "Try again",
              });
      }else{
          swal({
              title: "Successfully submitted",
              icon: "success",
              button: "Go",
          })
      }
  });
      </script>
      <script src="../js/typewrite.js"></script>
</body>
</html>