<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Travel Pedia</title>
        <link rel="stylesheet" href="dio.css" >
        <style media="screen">
        div.bg
        {
            height:720px;
            width: 100%;
            background: url('resource/featured.gif') repeat;
            background-size:cover;
            background-position: center;
            position:inherit;
            opacity: 0.9;
            filter: alpha(opacity=90);


        }
        button
        {
            background-color: red;
            color: white;
        }

        </style>
    </head>
    <body>

        <div class="container-fluid bg">
            <div class="row">
                <div class="col-md-2 offset-md-5">
                    <h3>TravelPedia</h3>

                </div>
            </div>
            <hr><hr>
            <br><br><br><br><br><br><br><br>
            <div class="row">

                <button class="col-md-3 offset-md-2" type="button" name="login">
                <a href="login.php" style="text-decoration:none; text-color:black">
                    Log in!!
                </a>
                </button>
                <button class="col-md-3 offset-md-2" type="button" name="singup">
                <a href="signup.php" style="text-decoration:none; text-color:black">
                    Sign up!!
                </a>
                </button>
            </div>
        </div>

    </body>
</html>
