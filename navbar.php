<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/nav.css">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <?php function isLoggedInn()
    {
        //session_start();
        return ($_SESSION["IsloggedIn"] && isset($_SESSION["IsloggedIn"]) )==True ? True : False;
    } ?>
    <nav>
      <div class="toggle">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </div>
      <ul>
        <li class="brand"> <a href="#">TravelPedia</a> </li>
        <li class="gen"> <a href="#">Home</a> </li>
        <li> <a href="#">About</a> </li>
        <li> <a href="#">Services</a> </li>
        <li> <a href="#">Portfolio</a> </li>
        <li> <a href="#">Contact</a> </li>
        <li class="noti"> <a href="#"> <span id="login"><?php
        if (isLoggedInn()) {
          echo "Logout";
        }
        else {
          echo "Login";
        }

         ?></span></a> </li>
        <li class="noti"> <a href="#"><i class="fa fa-bell" aria-hidden="true"></i></a> </li>

      </ul>
    </nav>

    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="js/nav.js"></script>
  </body>
</html>
