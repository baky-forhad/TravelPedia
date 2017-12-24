<?php

  session_start();
  include 'db_rw.php';

  if ($_SESSION['IsloggedIn']) {
    $id = $_SESSION['userId'];
    $postId = $_REQUEST['postId'];
    $sql = "UPDATE `post` SET `delete_status`=1 WHERE `postId`='$postId' and `userId`='$id'";
    updateDB($sql);
  }
  else {
    header('Location:login.php');
  }

 ?>
