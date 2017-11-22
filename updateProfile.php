<?php
include 'sqlFunction.php';
session_start();
$firstName = $_SESSION['profile']['firstName'];
$lastName = $_SESSION['profile']['lastName'];

$phone = $_SESSION['profile']['phone'];
$day = $_SESSION['profile']['day'];
$month = $_SESSION['profile']['month'];
$year = $_SESSION['profile']['year'];

if (isset($_SESSION['file'])) {
  $sql = "UPDATE `usertable` SET `firstName` = '$firstName', `lastName` = '$lastName', `profilePicLink` = '$_SESSION["userName"]', `phone` = '$phone', `dob` = '2017-11-09', `gender` = 'F' WHERE `usertable`.`userId` = 7;";
  if (isSignupSuccesful($sql)) {
    header("Location:index.php");
  }
}
else {
  ?>
  <script type="text/javascript">
      alert("Upload a picture first!")
      window.location = "registrationPic.php";
  </script>-
  <?php
}
 ?>
