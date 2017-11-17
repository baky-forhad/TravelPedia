<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
<<<<<<< HEAD
        <?php
        session_start();
        $_SESSION["IsloggedIn"]=True;
        header("Location:createpost.php");
        ?>
=======
>>>>>>> ae31e5d435e04ee8550b74143840a8aded1a5bed

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
