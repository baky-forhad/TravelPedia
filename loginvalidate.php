<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();

            $xml = simplexml_load_file("database.xml") or die("error: xml can not be found");
            //echo "post:";

            if(strlen($_POST["uname"])>0 and strlen($_POST["pass"]>0))
            {

                foreach ($xml->user as $u)
                {
                    if($u->uname == $_POST["uname"] or $u->email==$_POST["uname"])
                    {
                        if($u->pass == $_POST["pass"])
                        {

                            $_SESSION["uname"] = $_POST["uname"];
                            $_SESSION["IsloggedIn"] = True;
                            header("Location:home.php");
                        }

                    }
                }

            }
            else
            {
                echo "invalid user name or passworrd";
            ?>
                <button type="button" name="button"><a href="login.php">Go to login</a></button>
            <?php
            }

            if(!$_SESSION["IsloggedIn"])
            {
                echo "invalid user name or passworrd";
                ?>
                <button type="button" name="button">
                    <a href="login.php">Go to login</a>
                </button>

                <?php
            }




        ?>



    </body>
</html>
