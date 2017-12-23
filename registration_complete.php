<?php
  session_start();
  $errorMsg="";
  if ($_SESSION["IsloggedIn"]!=True) {
    header("Location:login.php");
  }
  else {
    if ($_POST) {
      include 'function.php';

      $firstName = $_POST['FirstName'];
      $lastName = $_POST['LastName'];

      $phone = $_POST['Phone'];
      $day = $_POST['Day'];
      $month = $_POST['Month'];
      $year = $_POST['Year'];

      if (isValidName($firstName) && isValidName($lastName)) {
        if (isset($_POST['Gender'])) {
          $gender = $_POST['Gender'];
          if (preg_match("/^(?:\+?88)?01[15-9]\d{8}$/", $phone)) {
            if (isValidDate($day,$month,$year)) {
              $profile = array('firstName' => $firstName ,'lastName' => $lastName,'gender'=>$gender,'phone'=>$phone,'day'=>$day,'month'=>$month,'year'=>$year);
              $_SESSION["profile"] = $profile;
              header("Location:registrationPic.php");
            }
            else {
              $errorMsg = "Invalid Date";
            }
          }
          else {
            $errorMsg = "Invalid Phone Number!";
          }
        }
        else {
          $errorMsg = "Gender not selected!";
        }
      }
      else {
        $errorMsg = "Name not valid!";
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
  <?php if ($errorMsg !== "") { ?>
  <script type="text/javascript">

    alert("<?php echo $errorMsg; ?>");

  </script>
<?php } ?>
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
            <form class="" action="registration_complete.php" onsubmit="return valid();" method="post">
                <table align="center">
                    <tr>
                      <td>
                        <div>
                            <input type="text"  name="FirstName" id="firstName" value="" placeholder="First Name">
                        </div>
                      </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="LastName" id="lastName" value="" placeholder="Last Name">

                        </td>
                    </tr>
                    <tr>
                      <td>
                            <span>Date of Birth: </span>

                      </td>
                    </tr>
                    <tr>
                        <td>
                            <select class="" name="Day" id="day">
                                <option value="0">DD</option>
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
                            <select class="" name="Month" id="month">
                                <option value="0">MM</option>
                                <?php
                                for ($i=1; $i<13; $i++)
                                {
                                    ?>
                                    <option value="<?php echo $i ?>"><?php echo $i ?>
                                    </option>
                                <?php } ?>
                            </select>
                            <select class="" name="Year" id="year">
                                <option value="0">YYYY</option>
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
                            <input type="text" name="Phone" id="phone" value="" placeholder="Phone">
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
                <a id="join-link" href="home.php"><b style="color:red">Skip Now!<b></a>
                </p>
                <hr>
        </div>
    </div>
    <script src="js/reg_complete.js">

    </script>
</body>
</html>
