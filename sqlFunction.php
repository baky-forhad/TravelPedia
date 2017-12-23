<?php

include 'dbconnect.php';

  function isLoginSuccesful($name,$pass)
  {

    $ar=array();
    $sql = "SELECT password,userId,userName FROM user where (userName='$name' or email='$name')";

    $result = mysqli_query(getConnection(), $sql)or die(mysqli_error()."baal");
    //print_r($result);
    while($row = mysqli_fetch_assoc($result)) {
      if ($row['password']==$pass) {
        session_start();
        $_SESSION['userId']=$row['userId'];
        $_SESSION['userName']=$row['userName'];
        mysqli_close(getConnection());
        return true;
      }
      mysqli_close(getConnection());
      return false;
    }
  }

  function isSignupSuccesful($query)
  {

    if(mysqli_query(getConnection(), $query)){
      echo "New records updated successfully";
      //mysqli_close(getConnection());
      return mysqli_insert_id(getConnection());
    }
    return false;
  }



 ?>
