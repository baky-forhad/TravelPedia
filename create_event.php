<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>log in</title>

    <style media="screen">
    .login-form
    {
        width: 75%;
        max-width: 450px;
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
    textarea
    {
      width: 300px;
    }
    select{
      height: 30px;
      width: 100px;
    }
    .r1
    {
      height: 20px;
      width: 100px;
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

  <div class="login-form" style="top: 80px;">

      <h2 align="center" style="margin:0px">
          Create a Tour!!!
          <small>
              <h6  style="margin:0px" >Lets travel! </h6>
          </small>
      </h2>
      <hr>
      <br>


        <form class="" action="server2.php" method="post">







          <table align="center">

            <tr>
              <td>
                <div>
                    <input type="text"  name="EventTitle" value="" placeholder="Event Name">
                </div>
              </td>

            </tr>

            <tr>
              <td>

                  <textarea name="Details" rows="8" cols="80" placeholder="Type Details"></textarea>

              </td>
            </tr>

            <tr>
              <td>
                    <input type="text" name="Limit" value="" placeholder="How many people?">

              </td>
            </tr>
            <tr>
              <td>
                <select class="" name="Day">
                <option value="">DD</option>
                <?php
                  for ($i=1; $i<32; $i++) {
                    ?>
                  <option value="<?php echo $i ?>"><?php echo $i ?></option>
                  <?php
                  }

                 ?>
                </select>

                <select class="" name="Month">
                  <option value="">MM</option>
                  <?php
                    for ($i=1; $i<13; $i++) {
                      ?>
                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                    <?php
                    }

                   ?>


                </select>

                <select class="" name="Year">
                  <option value="">YYYY</option>
                  <?php
                    for ($i=1900; $i<2018; $i++) {
                      ?>
                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                    <?php
                    }

                   ?>


                </select>

              </td>
            </tr>
            <tr>
              <td>
                <input type="text" name="Location" value="" placeholder="Where is the trip?">

              </td>
            </tr>


            <tr>
              <td>
                <input id="btn-login" type="submit" name="" value="Create">
              </td>
            </tr>




          </table>

        </form>
        <br><hr>

        <p align="center">
            Dont want to create??
            <a id="join-link" href="signup.php"><b style="color:red">Cancel Now!<b></a>
        </p>

        <hr>




    </div>

</div>




  </body>
</html>
