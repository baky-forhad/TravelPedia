<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>log in</title>

    <style media="screen">
    .login-form
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
    }




    </style>

  </head>
  <body style="background-color: rgb(227, 231, 232)">

    <div>

  <div class="login-form" style="top: 172px;">

      <h2 align="center" style="margin:0px">
          Log in to TravelPedia!!!
          <small>
              <h6  style="margin:0px" >I'm the one who travels </h6>
          </small>
      </h2>
      <hr>
      <br>


        <form class="" action="index.php" method="post">







          <table align="center">

            <tr>
              <td>
                <div>
                    <input type="text" name="" value="" placeholder="username or email">
                </div>
              </td>

            </tr>

            <tr>
              <td>
                  <input type="password" name="" value="" placeholder="password">

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
            New to TravelPedia?
            <a id="join-link" href="signup.php"><b style="color:red">Join Now!<b></a>
        </p>

        <hr>




    </div>

</div>




  </body>
</html>
