<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sign up</title>
        <style media="screen">

        div.bg
        {
            height:768px;
            width: 100%;
            background: url('resource/signup.jpg') repeat;
            background-size: cover;
            background-position: center;
            position: relative;
            opacity: 0.9;
            filter: alpha(opacity=90);


        }
        .signup-form
            {
                width: 75%;
                max-width: 350px;
                margin: auto;
                position: absolute;
                left: 0;
                right: 0;
                padding: 20px;
                border: 0px solid #dddddd;
                opacity: 1;
                filter: alpha(opacity=100);
                <!--background-color: #ffffff;-->
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
            #btn-signup
            {
                width: 309px;
                font-weight: bold;
                background-color: red;
                color: :white;
            }

            #login-link
            {
                text-decoration: none;
                text-decoration-color: red;
            }

        </style>



    </head>
    <body style="background-color: rgb(227, 231, 232)">
        <div class="bg">
            <div class="signup-form" style="top:100px" >
                <h2 align="center" style="margin:0px; font-color:red">
                    Sign up page
                <small>
                    <h6  style="margin:0px; font-color:red" >
                        ready to explore
                    </h6>
                </small>
                </h2>
                <hr>
                <br>
                <form class="" action="signupValidate.php" method="post">
                    <table align="center" >
                        <tr>
                            <td>
                                <input type="email" name="email" value="" placeholder="example@mail.com">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="name" value="" placeholder="jon_snow">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="password" name="password" value="" placeholder="password">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="password" name="" value="" placeholder="re-enter password">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input id="btn-signup" align="center"  type="submit" name="" value="Sign up">
                            </td>
                        </tr>
                    </table>
                </form>
                <br><hr>
                <p align="center">
                    Already a member?
                    <a id="login-link" href="login.php"><b style="color:red">Sign in Now!<b></a>
                </p>
                <hr>
            </div>
        </div>
    </body>
</html>
