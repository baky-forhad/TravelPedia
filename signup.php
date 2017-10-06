<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sign up</title>
        <style media="screen">

            .signup-form
             {
                width: 75%;
                max-width: 350px;
                margin: auto;
                position: absolute;
                left: 0;
                right: 0;
                padding: 20px;
                border: 1px solid #dddddd;
                background-color: #ffffff;
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
            }

            #login-link
            {
                text-decoration: none;
                text-decoration-color: red;
            }

        </style>



    </head>
    <body style="background-color: rgb(227, 231, 232)">

        <div class="signup-form" style="top:100px" >


                    <h2 align="center" style="margin:0px">
                        Sign up page
                        <small>
                            <h6  style="margin:0px" >
                                ready to explore
                            </h6>
                        </small>
                    </h2>
                    <hr>
                    <br>
                <form class="" action="home.php" method="post">
                    <table align="center" >

                        <tr>
                            <td>
                                <input type="email" name="" value="" placeholder="example@mail.com">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="text" name="" value="" placeholder="jon_snow">
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <input type="password" name="" value="" placeholder="password">
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <input type="password" name="" value="" placeholder="confirm password">
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




    </body>
</html>
