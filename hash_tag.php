<?php
  session_start();
  include 'function.php';
  if (isloggedIn()) {
    include 'db_rw.php';

    $sql = "SELECT tag from tags";

    $a = getJSONFromDB($sql);

    echo $a;
  }
  else {
    header('Location:login.php');
  }
?>
