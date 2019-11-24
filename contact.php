<!doctype html>
<html lang="en">
  <head>
    <title>Jirka Danielka's personal page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <link rel="icon" href="img/favicon.png">
    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php
    if (isset($_POST["mail-body"])&&isset($_POST["full-name"])&&isset($_POST["email"])&&$_POST["mail-body"]!=""&&$_POST["full-name"]!=""&&$_POST["email"]!="" ) {
      $msg = $_POST["mail-body"]. ', from: '. $_POST["full-name"].', phone:'.(isset($_POST["phone"])&&$_POST["phone"]!=""?$_POST["phone"]:' without phone');
      mail("mail@jiri-danielka.cz","Message from".$_POST["email"] ,$msg);
      echo "";
    }
     ?>
    <div class="site-wrap">
      <a href="#" class="offcanvas-toggle js-offcanvas-toggle" style="color:white; font-size:1.2em">Menu</a>
      <div class="offcanvas_menu" id="offcanvas_menu">
        <ul class="mb-5">
          <li><a href="index.html">Bio</a></li>
          <li><a href="resume.html">Resume</a></li>
          <li><a href="notes.html">Travel notes</a></li>
          <li class="active"><a href="contact.php">Contact</a></li>
        </ul>
        <ul class="social">
          <li><a href="https://www.linkedin.com/in/jiří-danielka-947393132" class="fa fa-linkedin"></a></li>
          <li><a href="https://www.facebook.com/jirka.danielka" class="fa fa-facebook"></a></li>
          <li><a href="https://www.instagram.com/jirkadanielka/" class="fa fa-instagram"></a></li>
        </ul>

<br><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

      </div>

      <aside style="background-image: url(img/profile_big3.jpg);"></aside>
      <main>
        <a href="index.html" class="home-button"><span class="fa fa-home"></span></a>
        <h1 class="mb-5">Contact Me</h1>
        <form action="contact.php" method="post" id="contact-form">

          <div class="row mb-4">
            <div class="col-md-12">
              <input type="text" class="form-control" placeholder="Full Name - required field" name="full-name">
            </div>
          </div>
          <div class="row mb-4">
            <div class="col-md-12">
              <input type="text" class="form-control" placeholder="Email Address  - required field" name="email">
            </div>
          </div>
          <div class="row mb-4">
            <div class="col-md-12">
              <input type="text" class="form-control" placeholder="Phone" name="phone">
            </div>
          </div>
          <div class="row mb-4">
            <div class="col-md-12">
              <textarea class="form-control" placeholder="Write some words of encouragement  - required field" cols="30" rows="10" name="mail-body" ></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <input type="submit" class="btn btn-primary btn-block" value="Send Message">
            </div>
          </div>


        </form>

      </main>
    </div>

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>
