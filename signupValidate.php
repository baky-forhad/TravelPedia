<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>signup validation page</title>
    </head>
    <body>
        <h2> Checking signup complletation </h2>

        <?php

            include 'function.php';
            $isValid=False;
            $query="INSERT INTO usertable VALUES ( NULL, ";
            $errorMsg="you must meet below conditions---";


            $mail = $_POST["email"];
            $username = $_POST["name"];
            $password = $_POST["password"];
            $confirmpassword = $_POST["confirmpassword"];

            print_r($_POST);

            if (filter_var($mail, FILTER_VALIDATE_EMAIL))
            {
                if(strlen($username)>=3)
                {
                    if (isPasswordValid($password,$confirmpassword))
                    {
                        $query .= "'$username', '$mail', NULL, NULL, '$password', NULL, '1')";
                        $isValid=True;
                    }
                    else {
                        $errorMsg .= "password too short or didn't match";
                    }

                }
                else
                {
                    $errorMsg .= " name not valid must be at at least 8 charachter long";
                }
            }
            else {
                $errorMsg .= "email not valid ";
            }


            if($isValid)
            {
                echo $query;
            }
            else
            {
                echo $errorMsg;

            }




         ?>





    </body>
</html>
