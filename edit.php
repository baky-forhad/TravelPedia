<?php
  //include 'function.php';
  session_start();
  include 'db_rw.php';
  $errorMsg="";
  if ($_SESSION["IsloggedIn"]!=True) {
    header("Location:login.php");
  }
  else {
    if ($_POST) {


      $firstName = $_POST['FirstName'];
      $lastName = $_POST['LastName'];

      $phone = $_POST['Phone'];
      $email = $_POST['Email'];


      if (strlen(trim($firstName))>3 && strlen(trim($lastName))>3) {

          if (preg_match("/^(?:\+?88)?01[15-9]\d{8}$/", $phone)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
              // $profile = array('firstName' => $firstName ,'lastName' => $lastName,'gender'=>$gender,'phone'=>$phone,'email'=>$email);
              // $_SESSION["profile"] = $profile;

              if(isset($_FILES['profilePic']))
              {
                  $IsValid =True;
                  //$imageName=$_POST["ImageName"];
                  $file_name = $_FILES['profilePic']['name'];
                  $file_size =$_FILES['profilePic']['size'];
                  $file_tmp =$_FILES['profilePic']['tmp_name'];
                  $file_type=$_FILES['profilePic']['type'];
                  $file_ext=explode('.',$file_name);
                  $file_ext=strtolower(end($file_ext));
                  $validTypes= array("jpeg","jpg","png");
                  if(!in_array($file_ext,$validTypes))
                  {
                      $IsValid=False;
                  }
                  // if(file_exists("images/".$imageName."jpeg"))
                  // {
                  //     $IsValid=False;
                  // }
                  // if(strlen($imageName)==0)
                  // {
                  //     $IsValid=False;
                  // }

                  if($IsValid)
                  {
                      move_uploaded_file($file_tmp,"images/".$_SESSION["userName"].".jpeg");
                      $_SESSION['file'] = "images/".$_SESSION["userName"].".jpeg";
                      $pic = "images/".$_SESSION["userName"].".jpeg";
                      $userName = $_SESSION ['userName'] ;
                      $sql = "UPDATE `user` SET `email`='$email',`firstName`='$firstName',`lastName`='$lastName',`profilePicLink`='$pic',`phone`='$phone' where `userName`='$userName'";

                      updateDB($sql);

                      header("Location:profile.php");



                  }
                  else
                  {
                    $userName = $_SESSION ['userName'] ;
                    $sql = "UPDATE `user` SET `email`='$email',`firstName`='$firstName',`lastName`='$lastName',`phone`='$phone' where `userName`='$userName'";

                    updateDB($sql);

                    header("Location:profile.php");

                  }


              }
              else {
                $userName = $_SESSION ['userName'] ;
                $sql = "UPDATE `user` SET `email`='$email',`firstName`='$firstName',`lastName`='$lastName',`phone`='$phone' where `userName`='$userName'";

                updateDB($sql);

                header("Location:profile.php");
              }


            }
            else {
              $errorMsg = "Invalid email";
            }
          }
          else {
            $errorMsg = "Invalid Phone Number!";
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
              width: 80px;
            }

            .login-form
            {
                width: 100%;
                margin: auto;
                max-width: 550px;
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
        include 'dbconnect.php';

        //include 'navbar.php';

        if(IsloggedIn())
        {
            $id=$_SESSION ['userId'] ;
            $sql = "SELECT * from user WHERE  userId='$id'";
            $result = mysqli_query(getConnection(), $sql)or die(mysqli_error());
            while($row = mysqli_fetch_assoc($result))
            {
                $userName = $row['userName'];
                $firstName=$row['firstName'];
                $lastName=$row['lastName'];
                $email =$row['email'];
                $pic=$row['profilePicLink'];
                $phone =$row['phone'];
                $dob=$row['dob'];
                $gender =$row['gender'];

            }
        ?>

            <div class="container-fluid bg" >
                <div class="row">
                    <?php include 'navbar.php'; ?>

                </div>
                <br><br><br><br>
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div   class="login-form" style="top: 520px; ">
                            <h1 align="center" style="margin:0px">
                                  create a memeory!!!
                            <small>
                              <h6  style="margin:0px" >I traveled there!!!</h6>
                            </small>
                          </h1>
                            <hr>
                            <br>
                            <form class="" action="edit.php" method="post" onsubmit="return valid();" enctype="multipart/form-data">
                              <br />
                              <fieldset>
                                  <legend><b>USER | EDIT</b></legend>
                                  <br/>
                                      <?php echo $errorMsg; ?>
                                      <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                          <tr>
                                              <td width="100"></td>
                                              <td width="10"></td>
                                              <td width="230"></td>
                                              <td></td>
                                          </tr>
                                          <tr>
                                              <td>User Name</td>
                                              <td>:</td>
                                              <td><?php echo $userName; ?></td>
                                              <td></td>
                                          </tr>
                                          <tr><td colspan="4"><hr /></td></tr>
                                          <tr>
                                              <td>first Name</td>
                                              <td>:</td>
                                              <td><input name="FirstName" id="firstName" type="text" value="<?php echo $firstName?>"></td>
                                              <td></td>
                                          </tr>
                                          <tr><td colspan="4"><hr /></td></tr>
                                          <tr>
                                              <td>Last Name</td>
                                              <td>:</td>
                                              <td><input name="LastName" id="lastName" type="text" value="<?php echo $lastName?>"></td>
                                              <td></td>
                                          </tr>
                                          <tr><td colspan="4"><hr /></td></tr>
                                          <tr>
                                              <td>Email</td>
                                              <td>:</td>
                                              <td>
                                                  <input name="Email" id="email" type="text" value="<?php echo $email?>">
                                                  <abbr title="hint: sample@example.com"><b>i</b></abbr>
                                              </td>
                                              <td></td>
                                          </tr>
                                          <tr><td colspan="4"><hr /></td></tr>
                                          <tr>
                                              <td>Phone</td>
                                              <td>:</td>
                                              <td>
                                                  <input name="Phone" type="text" id="phone" value="<?php echo $phone?>">
                                                  <abbr title="hint: 01700000000"><b>i</b></abbr>
                                              </td>
                                              <td></td>
                                          </tr>
                                          <tr><td colspan="4"><hr /></td></tr>
                                          <tr>
                                              <td>Picture</td>
                                              <td>:</td>
                                              <td>
                                                  <table>
                                                      <tr>
                                                          <td><img width="48" src="<?php echo $pic?>" /></td>
                                                          <td><input type="file" name="profilePic" value=""></td>
                                                      </tr>
                                                  </table>
                                              </td>
                                              <td></td>
                                          </tr>


                                      </table>
                                      <hr />
                                      <input type="submit" value="Save">

                              </fieldset>
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

        <script src="js/reg_pic.js">

        </script>

    </body>
</html>
