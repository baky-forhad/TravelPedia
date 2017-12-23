<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/nav.css">


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <?php
    //include 'function.php';
    function isFine()
    {
        return isloggedIn();
        //session_start();
        //return true;
        //return ($_SESSION["IsloggedIn"] && isset($_SESSION["IsloggedIn"]) )==True ? True : False;
    } ?>
    <nav>
      <div class="toggle">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </div>
      <ul>
        <li class="brand"> <a href="#">TravelPedia</a> </li>
        <li class="gen"> <a href="home.php">Home</a> </li>
        <li> <a href="profile.php">Profile</a> </li>
        <li> <a href="post.php">Post</a> </li>
        <li> <a href="createpost.php">Create Post</a> </li>

        <li> <a id="myBtn" href="#">Check In</a> </li>
        <li class="noti"> <a href="index.php"> <span id="login"><?php
        if (isFine()) {
          echo "Logout";
        }
        else {
          echo "Login";
        }

         ?></span></a> </li>
        <li class="noti"> <a href="#"><i class="fa fa-bell" aria-hidden="true"></i></a> </li>

      </ul>
    </nav>

    <!-- The Modal -->
    <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <form class="" method="post">
          <div class="modal-header">
            <span class="close">&times;</span>
            <h2 align="center">Check In</h2>
          </div>
          <div align="center" class="modal-body">
            <br><br>
            <input type="text" id="location" name="locationID" value="" style="width:60%; height: 80px">
            <br><br>
            <input type="submit" onclick="showHint()" name="" value="CheckIn" style="width:20%; height: 50px">
            <br><br><br><br><br><br><br>

          </div>
          <div align="center" class="modal-footer">
            <p align="center">Select Place Where You Are Now!</p>

          </div>
        </form>

      </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="js/nav.js"></script>
    <script type="text/javascript">
    var loc = {};
    function activatePlacesSearch()
    {
        var input = document.getElementById('location');
        var autocomplete = new google.maps.places.Autocomplete(input);
        google.maps.event.addListener(autocomplete, 'place_changed', function ()
        {
          var place = autocomplete.getPlace();
          loc.lat = place.geometry.location.lat();
          loc.lng = place.geometry.location.lng();
          document.getElementById('placeselected').value = "true";


        });

        console.log(loc);


    }

    function showHint() {
      //makeString();
      //console.log($('#chips-autocomplete2').material_chip('data'));
      var  xmlhttp = new XMLHttpRequest();
      var str=document.getElementById('location').value;
      //document.getElementById("spinner").style.visibility= "visible";
      xmlhttp.onreadystatechange = function() {
        //alert(xmlhttp.rxmlhttpeadyState);
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          //document.getElementById("spinner").style.visibility= "hidden";
          alert("Travel History Added!");
        }
      };
      var url="weather1.php?location="+str+"&lat="+loc.lat+"&lng="+loc.lng;
      //alert(url);
      xmlhttp.open("GET", url,true);
      xmlhttp.send();
    }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcYc38cBGLlVJrFE-WTn_K3D2ACzAGvOc&libraries=places&callback=activatePlacesSearch"></script>
  </body>
</html>
