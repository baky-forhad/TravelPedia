<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>log in</title>
    <link rel="stylesheet" href="css/bootstrap-grid.css">

    <style media="screen">


    div.bg
    {
        height:768px;
        width: 100%;
        background: url('resource/indexbg.jpeg') repeat;
        background-size: cover;
        background-position: center;
        position: relative;
        opacity: 0.9;
        filter: alpha(opacity=90);


    }

    .login-form
    {
        width: 75%;
        max-width: 350px;
        margin: auto;
        position: absolute;
        left: 0;
        right: 0;
        padding: 20px;
        border: 0px solid #dddddd;
        opacity: .8;
        filter: alpha(opacity=80);
        background-color: #ffffff;
    }
    #join-link
    {
        text-decoration: none;
        text-decoration-color: red;
    }

    input
    {
        height: 30px;
        width: 300px;
        margin-top: 7px;
        margin-bottom: 7px;
        font-size: 12pt;
        padding-left: 6px;


    }
    #btn-login
    {
        width: 310px;
        font-weight: bold;
        color:#ffffff;
        background-color: red;
    }

    body{
      margin: 0;
    }


    </style>

  </head>
  <body>

    <div class="container-fluid bg">

        <div class="login-form" style="top: 172px;">

            <h2 align="center" style="margin:0px">
                Log in to TravelPedia!!!
                <small>
                    <h6  style="margin:0px" >I'm the one who travels </h6>
                </small>
            </h2>
            <hr>
            <br>
            <?php
                session_start();
                $_SESSION["IsloggedIn"]=False;

            ?>

            <form  action="loginvalidate.php" method="post">
                <table align="center">
                    <tr>
                        <td>
                            <div>
                                <input type="text" id="name" name="uname" value="" placeholder="username or email">
                            </div>
                        </td>

                    </tr>

                    <tr>
                        <td>
                            <input type="password" name="pass" value="" placeholder="password">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input id="btn-login" type="submit" name="" value="Log in">
                        </td>
                    </tr>


                    <tr>
                        <td style="text-align:right">
                            <a href="#"><small>forget password?</small></a>
                        </td>
                    </tr>

                </table>

            </form>
            <br><hr>

            <p align="center">
                <b>New to TravelPedia?</b>
                <a id="join-link" href="signup.php"><b style="color:red; opacity:1.0">Join Now!<b></a>
            </p>
            <hr>
        </div>
    </div>




  </body>
</html>
