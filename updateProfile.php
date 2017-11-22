<?php
include 'sqlFunction.php';
session_start();
$firstName = $_SESSION['profile']['firstName'];
$lastName = $_SESSION['profile']['lastName'];

$phone = $_SESSION['profile']['phone'];
$day = $_SESSION['profile']['day'];
$month = $_SESSION['profile']['month'];
$year = $_SESSION['profile']['year'];
$filename = $_SESSION['file'];
$userName = $_SESSION['userName'];

$dob = $year.'-'.$month.'-'.$day;
$gender = $_SESSION['profile']['gender'];

if (isset($_SESSION['file'])) {
  print_r($_SESSION);
  $sql = "UPDATE `user` SET `firstName` = '$firstName', `lastName` = '$lastName', `profilePicLink` = '$filename', `phone` = '$phone', `dob` = '$dob', `gender` = '$gender' WHERE `user`.`userName` = '$userName';";
  if (isSignupSuccesful($sql)) {
    //header("Location:index.php");
  }
}
else {
  ?>
  <script type="text/javascript">
      alert("Upload a picture first!")
      window.location = "registrationPic.php";
  </script>
  <?php
}
 ?>
