<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equic = "X-UA-Compatible" content="IE=edge">
    <title>AquaPro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="..//css/style.css">
    <link rel="stylesheet" type="text/css" href="..//css/services style.css">
    <link rel="stylesheet" type="text/css" href="../css/section2.css">
</head>
<body>
    <!-- Shalom, World -->
    <section style="background-image: url(../img/pexels-pixabay-247763.jpg); background-size: cover;background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;">
        <!--Navbar start-->
        <header>
            <?php include "nav.php" ?>
        </header>
    <br><br><br>
         <!--Navbar ends-->
    <h1 style="text-align: center; color: white; font-family: Roboto; font-size: 52px;font-weight: 500; font-size: 72px;">&nbsp;<span class = "txt-type" data-wait="3000" data-words='["ABOUT US"]'></span></h1>
    <p style="text-align: center; color: white; font-family: Roboto Condensed;font-size: 24px">Know our History, Vision and Mission</p>
    <p style="text-align: center; color: white; font-family: Roboto; font: 28px; font-weight: 100; font-size: 18px">______________________________</p>
    <br><br><br>
    </section>
    <!--
   <section style="background-color: #023e8a;"><br>
       <h1 style="text-align: center; font-family: Roboto Condensed; font-weight: 800; font-size: 48px; color: white;">History of AquaPro</h1>
      <div class="wrapper" style="padding-top: 30px;">
          <img src="../img/history.jpg" alt="">
          <div class="overlay">
              <div class="content">
                  AquaPro <span style="text-align: justify;">This picture is the first and oldest facility of AquaPro. This was taken during 1899. AquaPro is a community public water supply
                    that delivers high quality drinking water to the
                    majority of the residents of Toledo City, Cebu. All of
                    the water provided from the District comes from lakes, reservoirs, rivers and
                    streams. The been serving Toledo City for a hundred years. <br></span>
              </div>
          </div>
      </div>
   </section>
  -->
  <!-- JOGS MAO NIY LATEST -->
  <section>
      <div class="hero">
        <div class = "btn-box">
          <button id="btn1" onclick ="openTab1()" style ="color: black; font-family: 'Poppins', sans-serif; font-weight: bold">History</button>
          <button id="btn2" onclick ="openTab2()" style ="color: black; font-family: 'Poppins', sans-serif; font-weight: bold">Vision</button>
          <button id="btn3" onclick ="openTab3()" style ="color: black; font-family: 'Poppins', sans-serif; font-weight: bold">Mission</button>
      </div>
      <!-- Start of the contents -->
      <!-- First Content TAB-->
      <div id="content1" class="content">
          <div class ="content-left">
            <h1>History</h1>
            <p>This picture is the first and oldest facility of AquaPro. This was taken during 1899. AquaPro is a community public water supply
                    that delivers high quality drinking water to the
                    majority of the residents of Toledo City, Cebu. All of
                    the water provided from the District comes from lakes, reservoirs, rivers and
                    streams. The been serving Toledo City for a hundred years. </p>
          </div>
          <div class ="content-right">
          <img src="../img/history.jpg">
          </div>
      </div>
<!-- SECOND CONTENT TAB -->
      <div id="content2" class="content">
          <div class ="content-left">
            <h1>Vision</h1>
            <p>AquaPro shall become an outstanding Water District with a team of fully dedicated people totally committed to provide water service to Toledo City with the highest standard of excellence. AquaPro is dedicated in providing the best quality of services and would do their best to provide it.</p>
          </div>
          <div class ="content-right">
          <img src="../img/vision-icon.png" width="80">
          </div>
      </div>
<!-- THIRD CONTENT TAB -->
      <div id="content3" class="content">
          <div class ="content-left">
            <h1>Mission</h1>
            <p>We are a Water Service Utility that aims to provide sufficient, safe, portable and affordable water ensuring public health and welfare thus, improving the quality of life of the people of Toledo. For customers who will be served by a competent and efficient workforce
            endeavor to satisfy the growing water needs of the entire community of
            Toledo City and anticipates best service in all parts of the coverage area.</p>
          </div>
          <div class ="content-right">
          <img src="../img/mission-icon.png" width="80">
          </div>
      </div>
    </div>
    </section>

   <section>
    <footer>
    <?php include "footer.php" ?>
    </footer>
    </section>
    <script src="../js/tabs2.js"></script>
    <script src="../js/typewrite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>