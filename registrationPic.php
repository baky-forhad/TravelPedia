<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>log in</title>

    <link rel="stylesheet" href="css/regiComplete.css">

  </head>
  <body style="background-color: rgb(227, 231, 232)">

    <div>

  <div class="login-form" style="top: 120px;">

      <h2 align="center" style="margin:0px">
          Complete your Profile!!!
          <small>
              <h6  style="margin:0px" >Let us be familiar! </h6>
          </small>
      </h2>
      <hr>
      <br>


        <form class="" action="server.php" method="post" enctype="multipart/form-data">







          <table align="center">

            <tr>
              <td>
                <div>
                    <img src="resource/images.jpg" alt="No image" width="310px">
                </div>
              </td>

            </tr>
            <tr>
              <td>
                <div class="">
                  <input type="file" name="profilePic" value="">
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <input id="btn-login" type="submit" name="" value="Upload">
              </td>
            </tr>




          </table>

        </form>
        <br><hr>

        <p align="center">
            Want to fill these later??
            <a id="join-link" href="signup.php"><b style="color:red">Skip Now!<b></a>
        </p>

        <hr>




    </div>

</div>




  </body>
</html>
