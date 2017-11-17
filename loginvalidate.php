<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        $_SESSION["IsloggedIn"]=True;
        header("Location:createpost.php");
        ?>



    </body>
</html>
