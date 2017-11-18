<?php
  session_start();
  if ($_SESSION["IsloggedIn"]!=True) {
    header("Location:login.php");
  }
  else {
    if ($_POST) {
      include 'function.php';
      $errorMsg="";
      $firstName = $_POST['FirstName'];
      $lastName = $_POST['LastName'];
      $gender = $_POST['Gender'];
      $phone = $_POST['Phone'];
      $day = $_POST['Day'];
      $month = $_POST['Month'];
      $year = $_POST['Year'];

      if (isValidName($firstName) || isValidName($lastName)) {
        if (isset($_POST['Gender'])) {
          if (preg_match('^(?:\+?88)?01[15-9]\d{8}$', $phone)) {
            if (isValidDate($day,$month,$year)) {
              
              header("Location:registrationPic.php");
            }
          }
        }
      }


      if (condition) {
        # code...
      }
    }
  }
?>




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
            <form class="" action="registration_complete.php" method="post">
                <table align="center">
                    <tr>
                      <td>
                        <div>
                            <input type="text"  name="FirstName" value="" placeholder="First Name">
                        </div>
                      </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="LastName" value="" placeholder="Last Name">

                        </td>
                    </tr>
                    <tr>
                      <td>
                            <span>Date of Birth: </span>

                      </td>
                    </tr>
                    <tr>
                        <td>
                            <select class="" name="Day">
                                <option value="">DD</option>
                                <?php
                                for ($i=1; $i<32; $i++)
                                {
                                    ?>
                                    <option value="<?php echo $i ?>"><?php echo $i ?>
                                    </option>
                                <?php
                                }
                                ?>
                            </select>
                            <select class="" name="Month">
                                <option value="">MM</option>
                                <?php
                                for ($i=1; $i<13; $i++)
                                {
                                    ?>
                                    <option value="<?php echo $i ?>"><?php echo $i ?>
                                    </option>
                                <?php } ?>
                            </select>
                            <select class="" name="Year">
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

                        </td>
                    </tr>
                    <tr>
                        <td>

                            <input class="r1" type="radio" name="Gender" value="M">Male
                            <input class="r1" type="radio" name="Gender" value="F">Female

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="Phone" value="" placeholder="Phone">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="btn-login" type="submit" name="" value="Next">
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
