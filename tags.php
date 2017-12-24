<?php
  session_start();
  include 'function.php';
  if (isloggedIn()) {
    include 'db_rw.php';

    $sql = "SELECT userId,userName,profilePicLink from user";

    $a = getJSONFromDB($sql);

    echo $a;
  }
  else {
    header('Location:login.php');
  }
?>
