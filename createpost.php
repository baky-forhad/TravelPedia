<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Createpost</title>
        <link rel="stylesheet" href="css/bootstrap-grid.css">

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
                    <div class="col-md-6 offset-md-3">
                        <div   class="login-form" style="top: 520px; ">
                            <h2 align="center" style="margin:0px">
                                  create a memeory!!!
                            <small>
                              <h6  style="margin:0px" >I traveled there!!!</h6>
                            </small>
                            </h2>
                            <hr>
                            <br>
                            <form class="" action="postvalidate.php" method="post">
                                <div class="row">
                                    <div class="col-md-8 offset-md-2">
                                        <input type="text"  name="postTitle" value="" placeholder="Post title">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 offset-md-2">
                                        <input type="text" name="travelmate" value="" placeholder="tag travelmates">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 offset-md-2">
                                        <input type="text"  name="postTags" value="" placeholder="Select Tags for the post">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 offset-md-2">
                                        <input type="text" name="locationID" id="location" value="" placeholder="select a location">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8 offset-md-2">
                                        <textarea name="description" rows="8" cols="56" draggable="false">
                                        </textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 offset-md-2">
                                        <!-- <div class="colmd-4"> -->
                                        DATE:
                                            <select class="col-md-3 offset-md-1" name="Day">

                                                <option value="">DD</option>
                                                <?php
                                                for ($i=1; $i<32; $i++)
                                                { ?>
                                                    <option value="<?php echo $i ?>"><?php echo $i ?>
                                                    </option>
                                                <?php
                                                }  ?>
                                            </select>
                                        <!-- </div>
                                        <div class="col-md4"> -->
                                            <select class="col-md-3" name="Month">
                                                <option value="">MM</option>
                                                <?php
                                                for ($i=1; $i<13; $i++)
                                                {
                                                    ?>
                                                    <option value="<?php echo $i ?>"><?php echo $i ?>
                                                    </option>
                                                <?php } ?>
                                            </select>

                                        <!-- </div>
                                        <div class="col-md4"> -->
                                            <select class="col-md-3" name="Year">
                                                <option value="">YYYY</option>
                                                <?php
                                                for ($i=1900; $i<2018; $i++)
                                                {
                                                    ?>
                                                    <option value="<?php echo $i ?>"><?php echo $i ?>
                                                    </option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 offset-md-2">
                                        <input type="file" name="images" value="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 offset-md-2" align="center">
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

    </body>
</html>
