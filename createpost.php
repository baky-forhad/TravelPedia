<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Createpost</title>
        <!-- <link rel="stylesheet" href="css/bootstrap-grid.css"> -->

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection">

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>



        <style media="screen">
            div.bg
            {
                height:100%;
                width: 100%;
                background: url('resource/indexbg.jpeg') repeat;
                background-size: cover;
                background-position: center;
                position: relative;
                opacity: 1;
                filter: alpha(opacity=100);
            }
            select{
              height: 30px;
              width:100%;
              margin-left: 0;
            }

            .login-form
            {
                width: 100%;
                margin: auto;

                left: 0;
                right: 0;
                padding: 20px;
                border: 0px solid #dddddd;
                opacity: 0.9;
                filter: alpha(opacity=90);
                background-color: #ffffff;
            }
            #join-link
            {
                text-decoration: none;
                text-decoration-color: red;
            }


            textarea{
                width: 100%;
            }

            input
            {
                height: 30px;
                width: 100%;
                margin-top: 7px;
                margin-bottom: 7px;
                font-size: 12pt;
                padding-left: 12px;


            }
            #btn-login
            {
                width: 310px;
                font-weight: bold;
                color:#ffffff;
                background-color: red;
            }

        </style>
    </head>
    <body style="background-color: rgb(227, 231, 232)">
        <?php
        include 'function.php';
        //include 'navbar.php';

        if(IsloggedIn())
        {
        ?>

            <div class="container-fluid bg" >
                <div class="row">
                    <?php include 'navbar.php'; ?>

                </div>
                <br><br><br><br>
                <div class="row">
                    <div class="col m6 offset-m3">
                        <div   class="login-form" style="top: 520px; ">
                            <h2 align="center" style="margin:0px">
                                  create a memeory!!!
                            <small>
                              <h6  style="margin:0px" >I traveled there!!!</h6>
                            </small>
                            </h2>
                            <hr>
                            <br>
                            <form class="" action="weather.php?lat=38.3709&lng=-76.4436" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col m8 offset-m2">
                                        <input type="text"  name="postTitle" value="" placeholder="Post title">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col m8 offset-m2">
                                        <input type="text" name="travelmate" value="" placeholder="tag travelmates">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col m8 offset-m2">
                                        <div class="chips chips-autocomplete"></div>
                                    </div>
                                </div>
                                <div class="row">
<<<<<<< HEAD
                                    <div class="col-md-8 offset-md-2">
                                        <input type="text" name="locationID" id="location" value="" placeholder="select a location">
=======
                                    <div class="input-field col m8 offset-m2">
                                        <input type="text" class="datepicker" id="datepicker1">
                                        <label for="datepicker1">Date</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col m8 offset-m2">
                                        <input type="text" id="location" name="locationID" value="" placeholder="select a location">
>>>>>>> 936692cf8a1a40d1e4511003d642154e675fefd0
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col m8 offset-m2">
                                      <textarea id="textarea1" class="materialize-textarea"></textarea>
                                      <label for="textarea1">Description</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- <div class="input-field col m8 offset-m2 " id="wrapper">
                                        <input type="file" id="upload_file" name="upload_file[]" onchange="preview_image();" multiple/>
                                    </div> -->
                                    <div class="col m8 offset-m2 file-field input-field" id="wrapper">
                                      <div class="btn">
                                        <span>File</span>
                                        <input type="file" id="upload_file" name="upload_file[]" onchange="preview_image();" multiple>
                                      </div>
                                      <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Upload one or more files">
                                      </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col m8 offset-m2">

                                      <span id="image_preview"></span>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col m8 offset-m2" align="center">
                                        <input id="btn-login" type="submit" name="" value="Create">
                                    </div>
                                </div>
                                <br>
                            </form>
                            <br><hr>
                        </div>
                        <br><br><br><br>
                    </div>

                </div>

            </div>

        <?php

        }
        else
        {
            header("Location:login.php");
        }
        ?>

<<<<<<< HEAD
=======
        <script>
            var loc = {};
            var day;
            var month;
            var year;

            function makeDate() {
              day = document.getElementById('day').value;
              //day = e.options[e.selectedIndex].value;
              month = document.getElementById('month').value;
              year = document.getElementById('year').value;
              console.log(day+"baal");
            }

            function activatePlacesSearch()
            {
                var input = document.getElementById('location')
                var autocomplete = new google.maps.places.Autocomplete(input);
                google.maps.event.addListener(autocomplete, 'place_changed', function ()
                {
                  var place = autocomplete.getPlace();
                  loc.lat = place.geometry.location.lat();
                  loc.lng = place.geometry.location.lng();
                  //console.log("shchs");


                });

                console.log(loc);


            }

            function showHint() {
            	var  xmlhttp = new XMLHttpRequest();
            	//document.getElementById("spinner").style.visibility= "visible";
            	xmlhttp.onreadystatechange = function() {
            		//alert(xmlhttp.rxmlhttpeadyState);
            		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                  alert(xmlhttp.responseText);
            		}
            	};
             	var url="weather.php?lat="+loc.lat+"&lng="+loc.lng;
            	//alert(url);
            	xmlhttp.open("GET", url,true);
            	xmlhttp.send();
            }





        </script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <script type="text/javascript">
          $(function () {
            $('.chips-autocomplete').material_chip({
              placeholder: 'Enter a tag',
              autocompleteOptions: {
                data: {
                  'Apple': null,
                  'Microsoft': null,
                  'Google': null
                },
                limit: Infinity,
                minLength: 1
              }
            });
            $('.datepicker').pickadate({
              selectMonths: true, // Creates a dropdown to control month
              selectYears: 15, // Creates a dropdown of 15 years to control year,
              today: 'Today',
              clear: 'Clear',
              close: 'Ok',
              closeOnSelect: false // Close upon selecting a date,
            });
          });

          function show() {
            var dat = $('.chips-autocomplete').material_chip('data');

            console.log(dat);
          }

          $(document).ready(function()
          {
           $('form').ajaxForm(function()
             {
              alert("Uploaded SuccessFully");
             });
            });

          function preview_image()
          {
           var total_file=document.getElementById("upload_file").files.length;
           for(var i=0;i<total_file;i++)
           {
            $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"' width='100px'>&nbsp;&nbsp;");
           }
         }



        </script>
        <script
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcYc38cBGLlVJrFE-WTn_K3D2ACzAGvOc&libraries=places&callback=activatePlacesSearch"
        ></script>

>>>>>>> 936692cf8a1a40d1e4511003d642154e675fefd0
    </body>
</html>
