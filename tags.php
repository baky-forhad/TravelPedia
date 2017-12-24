<?php
  session_start();
  include 'function.php';
  if (isloggedIn()) {
    include 'db_rw.php';

    $sql = "SELECT userId,userName,profilePicLink from user";

    $a = getJSONFromDB($sql);

    // if (isset($_SESSION['postId'])) {
    //   $postId
    // }
    // $sql = "SELECT "

    echo $a;
  }
  else {
    header('Location:login.php');
  }
?>
