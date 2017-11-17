<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

    <?php
      session_start();
      include 'sqlFunction.php';
      if (isLoginSuccesful($_POST['uname'],$_POST['pass'])) {
        $_SESSION['IsloggedIn']=true;
        header("Location:createpost.php");
      }

     ?>
     <script type="text/javascript">
       alert("false password");
       window.location = 'login.php';
     </script>


    </body>
</html>
