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
            //$userId =$_SESSION['userId'];
            if(!$_SESSION['IsloggedIn'])
            {
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
                            <!-- <?php
                            // include "sqlFunction.php";
                            // $sql = "SELECT profilePicLink FROM userTable WHERE userId='$userId'";
                            // $result = mysqli_query(getConnection(), $sql)or die(mysqli_error());
                            // while($row = mysqli_fetch_assoc($result))
                            //{

                                //mysqli_close(getConnection());
                            ?>
                                <img src="<?php //echo $row['profilePicLink']; ?>" alt="some error">
                            <?php
                            // }
                            // else
                            // {
                            // ?>
                            //     <img src="resource/profile.png" alt="someerror">
                            // <?php
                            // }
                            ?> -->
                            <img class="round" src="resource/profile.png" alt="someerror">
                        </div>
                        <div class="col-md-3">
                            <br>

                            <font size="6">

                                Hello, <?php echo "name" ?>
                            </font><br>
                            <font size ="3">
                                Createing memories with us since 2017
                            </font>
                        </div>
                        <div class="col-md-4 offset-md-3">
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

                <div class="container-fluid">


                    <!-- //postloop -->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="col-md-10 offset-md-1" >
                                <h2>
                            	<a href="#">POST TITLE</a>
            					</h2>
            					<p class="lead">
            						by <a href="#">TRAVELER 112</a>
            					</p>
                                <p>
                                    with <i class="fa fa-tag" aria-hidden="true"></i> <a href="#">dipto</a>  <a href="#">baky</a>
                                </p>
            					<p>
            						<i class="fa fa-clock-o" aria-hidden="true"></i>Posted on August 28, 2013 at 10:00 PM
            					</p>
                                <p>
            						<i class="fa  fa-map-marker" aria-hidden="true"></i>shajek valley
            					</p>
            					<hr>
            					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
                                <!-- //image loop -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <img src="" alt="no image">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <img src="" alt="no image">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <img src="" alt="no image">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <img src="" alt="no image">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <img src="" alt="no image">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <img src="" alt="no image">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <img src="" alt="no image">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <img src="" alt="no image">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <img src="" alt="no image">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <img src="" alt="no image">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <img src="" alt="no image">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <img src="" alt="no image">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <img src="" alt="no image">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <img src="" alt="no image">
                                        </div>
                                    </div>

                                </div>

                                <!--end of image loop  -->
                                <br>

                                <hr>

            					 <i class="fa fa-heart-o" aria-hidden="true"></i>12
            					<hr>
                            </div>
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
        ?>

    </body>
</html>
