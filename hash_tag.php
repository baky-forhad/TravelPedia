<?php
  include 'db_rw.php';

  $sql = "SELECT tag from tags";

  $a = getJSONFromDB($sql);

  echo $a;
?>
