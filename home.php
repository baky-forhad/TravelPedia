<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <link rel="stylesheet" href="css/bootstrap-grid.css">
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
            $userName =$_SESSION['userName'];
            if($_SESSION['IsloggedIn'])
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

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8" style="background-color:yellow;">
                            <div class="col-md-10 offset-md-1 " style="background-color:red;">
                                posts
                                <br><br><br><br><br><br><br><br><br><br><br>
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
