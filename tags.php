<?php
  include 'db_rw.php';

  $sql = "SELECT userId,userName,profilePicLink from user";

  $a = getJSONFromDB($sql);

  echo $a;
?>
