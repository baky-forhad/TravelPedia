<?php
  session_start();
  $_SESSION['file'] = "images/anu.jpeg"

  $errorMsg="";
  if ($_SESSION["IsloggedIn"]!=True) {
    header("Location:login.php");
  }
  else {
    if ($_POST) {
      include 'function.php';

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

              header("Location:registrationPic.php");
              echo "you changed your pic to this<br>";


          }
          else
          {
              $errorMsg = "not a valid file type or file with same name exist";

          }


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


        <form class="" action="registrationPic.php" method="post" enctype="multipart/form-data">







          <table align="center">

            <tr>
              <td>
                <div>
                    <img src="<?php echo $_SESSION['file']; ?>" alt="No image" width="310px">
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
                <input id="btn-login" type="submit" name="submit" value="Upload">
              </td>
            </tr>




          </table>

        </form>
        <br><hr>


        <p align="center">
            Uploading picture succed??
            <a id="join-link" href="updateProfile.php"><b style="color:red">Complete Profile!<b></a>
        </p>

        <hr>




    </div>

</div>




  </body>
</html>
