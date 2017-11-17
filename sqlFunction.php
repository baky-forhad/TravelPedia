<?php

  include 'dbconnect.php';

  function isLoginSuccesful($name,$pass)
  {
    $ar=array();
    $sql = "SELECT password FROM usertable where (userName='$name' or email='$name')";

    $result = mysqli_query(getConnection(), $sql)or die(mysqli_error()."baal");
    //print_r($result);
    while($row = mysqli_fetch_assoc($result)) {
      if ($row['password']==$pass) {
        mysqli_close(getConnection());
        return true;
      }
      mysqli_close(getConnection());
      return false;
    }
  }


 ?>
