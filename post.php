<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <link rel="stylesheet" href="css/bootstrap-grid.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <style>
         .round {
                border-radius: 50%;
                overflow: hidden;
                width: 100px;
                height: 100px;
            }
            .round img {
                display: block;
                min-width: 100%;
                min-height: 100%;
            }
            .home-top
            {
                background-color: blue;
            }
            body
            {
                margin: 0;
            }
    </style>
    </head>
    <body>
        <?php

            session_start();

            include 'function.php';

            if(isloggedIn())
            {
              $userId = $_SESSION['userId'];

              $userName =$_SESSION['userName'];
            ?>
                <div class="container-fluid">

                    <div class="row">
                        <?php include 'navbar.php'; ?>
                    </div>
                    <div class="row home-top">
                        <div class="col-md-12">
                            <br>
                        </div>
                        <div class="col-md-1 offset-md-1">

                            <!-- sql insert to fetch profile pic -->
                            <?php
                            include "sqlFunction.php";
                            $sql = "SELECT profilePicLink FROM user WHERE userName='$userName'";
                            $result = mysqli_query(getConnection(), $sql)or die(mysqli_error());
                            while($row = mysqli_fetch_assoc($result))
                            {

                                mysqli_close(getConnection());
                                if ($row['profilePicLink'] != NULL) {
                                  # code...
                            ?>
                                <img class="round" src="<?php echo $row['profilePicLink']; ?>" alt="some error">
                            <?php
                            }
                            else
                            {
                            ?>
                                <img class="round" src="resource/profile.png" alt="someerror">
                            <?php
                            }
                          }
                            ?>

                        </div>
                        <div class="col-md-3 offset-md-1">
                            <br>

                            <font size="6">

                                Hello, <?php echo $userName; ?>
                            </font><br>
                            <font size ="3">
                                Createing memories with us since 2017
                            </font>
                        </div>
                        <div class="col-md-4 offset-md-2">
                            <font size="6">
                                temp:27<br>
                                cludy
                            </font><br>
                            <font size ="3">
                                bring umbrella if you go to someplaces near!!
                            </font>

                        </div>
                        <div class="col-md-12">
                            <br>
                        </div>
                    </div>
                </div>



                    <?php
                        include 'db_rw.php';

                        $sql= "SELECT * from POST WHERE userId='$userId' and `delete_status`=0";
                        $posts=getDataFromDB($sql);

                    ?>
                    <div class="container-fluid">
                        <div class="row">



                        <div class="col-md-8">
                            <?php foreach ($posts as $key ) { ?>
                            <div class="row">


                            <div class="col-md-10 offset-md-1" >
                                <h2>
                            	<a href="#" id="title"><?php echo $key['postTitle']; ?></a>
            					</h2>
            					<p class="lead">
                                    <?php
                                        $id =$key['userId'];
                                        $sql= "SELECT userName from user where userId='$id'";
                                        $userArr=getDataFromDB($sql);

                                        foreach ($userArr as $user) {
                                            $name =$user['userName'];
                                        }
                                    ?>

            						by <a href="<?php echo "profile.php?id=".$id ?>" id="author"><?php echo $name; ?></a>
            					</p>
                                <p>

                                    with <i class="fa fa-tag" aria-hidden="true"></i>
                                    <?php
                                        $id =$key['postId'];
                                        $sql= "SELECT s.userName as uname, s.userId as uid from user as s INNER JOIN travel_mate as c on s.userId=c.userId where c.postId='$id'";
                                        $userNameID=getDataFromDB($sql);
                                        foreach ($userNameID as $user) {
                                            $name =$user['uname'];
                                            $uid =$user['uid'];
                                        ?>
                                    <a href="<?php echo "profile.php?id=".$uid ?>"> <?php echo $name; ?></a>
                                <?php } ?>
                                </p>

                                <p>
                                    <i class="fa fa-hashtag" aria-hidden="true"></i>
                                    <?php
                                        $id =$key['postId'];
                                        $sql= "SELECT s.tag as tname, s.tagId as tid from tags as s INNER JOIN post_tag as c on s.tagId=c.tagId where  c.postId='$id'";
                                        $userNameID=getDataFromDB($sql);
                                        foreach ($userNameID as $user)
                                        {
                                            $name =$user['tname'];
                                            $uid =$user['tid'];
                                        ?>
                                        <a href="<?php echo "#" ?>"><?php echo $name ?></a>
                                        <?php }  ?>



            					</p>




            					<p>
            						<i class="fa fa-clock-o" aria-hidden="true"></i>
                                    <?php echo $key['createdDateTime']; ?>
            					</p>
                                <p>
                                    <?php
                                        $place =$key['locationId'];
                                        $sql= "SELECT placeName from location where locationId='$place'";
                                        $placeArr=getDataFromDB($sql);

                                        foreach ($placeArr as $place) {
                                            $name =$place['placeName'];
                                        }
                                    ?>
            						<i class="fa  fa-map-marker" aria-hidden="true" >
                                        <a href="#"><?php echo $name; ?> </a>
                                    </i>

            					</p>
            					<hr>
            					<p>
                                    <?php echo $key['postDetails'] ?>
                                </p>
                                <!-- //image loop -->



                                <div class="row">
                                    <?php
                                        $postid =$key['postId'];
                                        $sql= "SELECT fileLink from post_image where postId='$postid'";
                                        $linkArr=getDataFromDB($sql);

                                        foreach ($linkArr as $place)
                                        {

                                            $link =$place['fileLink'];
                                            //echo $link;
                                    ?>
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <img src="<?php echo $link;?>" alt="no image">
                                        </div>
                                    </div>
                                  <?php } ?>


                                </div>

                                <!--end of image loop  -->
                                <br>

                                <hr>

            					 <button type="button" name="button">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                </button>
                                   <?php echo $key['points'] ?>
                                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
                                  <button type="button" id="edit" name="button" value="<?php echo $postid ?>">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true">
                                        edit post
                                    </i>

                                 </button>
                                 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
                                 <button type="button" id="delete" name="button" onclick="showHint()" value="<?php echo $postid ?>">
                                   <i class="fa fa-trash" aria-hidden="true">
                                       delete post
                                   </i>

                                </button>


            					<hr>
                            </div>
                        </div>
                        <?php } ?>
                        </div>

                        <div class="col-md-4" style="background-color:black;">
                            <div class="col-md-10 offset-md-1" style="background-color:red;">
                            SUGSTION
                                <br><br><br><br><br><br><br><br><br><br><br>
                            </div>

                        </div>




                    </div>
                </div>

            <?php
            }
            else {
              header('Location:login.php');
            }
        ?>

        <script type="text/javascript">
          function showHint() {
            //makeString();
            //console.log($('#chips-autocomplete2').material_chip('data'));
            var  xmlhttp = new XMLHttpRequest();
            var str=document.getElementById('delete').value;
            //document.getElementById("spinner").style.visibility= "visible";
            xmlhttp.onreadystatechange = function() {
              //alert(xmlhttp.rxmlhttpeadyState);
              if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                //document.getElementById("spinner").style.visibility= "hidden";
                alert("Your Post Has been deleted!");
                document.location = "post.php";

              }
            };
            var url="delete.php?postId="+str;
            //alert(url);
            xmlhttp.open("GET", url,true);
            xmlhttp.send();
          }
          function showHint1() {
            //makeString();
            //console.log($('#chips-autocomplete2').material_chip('data'));
            var  xmlhttp = new XMLHttpRequest();
            var str=document.getElementById('edit').value;
            //document.getElementById("spinner").style.visibility= "visible";
            xmlhttp.onreadystatechange = function() {
              //alert(xmlhttp.rxmlhttpeadyState);
              if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                //document.getElementById("spinner").style.visibility= "hidden";

              }
            };
            var url="delete.php?postId="+str;
            //alert(url);
            xmlhttp.open("GET", url,true);
            xmlhttp.send();
          }
        </script>

    </body>
</html>
