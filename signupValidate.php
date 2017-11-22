<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>signup validation page</title>
    </head>
    <body>
        <h2> Checking signup complletation </h2>

<<<<<<< HEAD
        <?php

            include 'function.php';

            include 'sqlFunction.php';
            $isValid=False;
            $query="INSERT INTO user VALUES ( NULL, ";
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
                        $query .= "'$username', '$mail', NULL, NULL, '$password', NULL, '1',NULL,NULL,'N')";
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
                  if(isSignupSuccesful($query)){
                    session_start();
                    $_SESSION['IsloggedIn']=True;
                    $_SESSION['userName']=$username;
                    header("Location:registration_complete.php");

                	}
                  else {
                    ?>
                    <script type="text/javascript">
                      alert("Username/Email already exist!");
                      window.location = 'signup.php';
                    </script>
                    <?php
                  }

                  //header("Location:signup.php");


            }
            else
            {
              header("Location:signup.php");
                echo $errorMsg;

            }




         ?>
=======
        <!-- <?php

            // include 'function.php';
            //
            // include 'sqlFunction.php';
            // $isValid=False;
            // $query="INSERT INTO usertable VALUES ( NULL, ";
            // $errorMsg="you must meet below conditions---";
            //
            //
            // $mail = $_POST["email"];
            // $username = $_POST["name"];
            // $password = $_POST["password"];
            // $confirmpassword = $_POST["confirmpassword"];
            //
            // print_r($_POST);
            //
            // if (filter_var($mail, FILTER_VALIDATE_EMAIL))
            // {
            //     if(strlen($username)>=6)
            //     {
            //         if (isPasswordValid($password,$confirmpassword))
            //         {
            //             $query .= "'$username', '$mail', NULL, NULL, '$password', NULL, '1',NULL,NULL,'N')";
            //             $isValid=True;
            //         }
            //         else {
            //             $errorMsg .= "password too short or didn't match";
            //         }
            //
            //     }
            //     else
            //     {
            //         $errorMsg .= " name not valid must be at at least 8 charachter long";
            //     }
            // }
            // else {
            //     $errorMsg .= "email not valid ";
            // }
            //
            //
            // if($isValid)
            // {
            //     echo $query;
            //       if(isSignupSuccesful($query)){
            //         session_start();
            //         $_SESSION['IsloggedIn']=True;
            //         $_SESSION['userName']=$username;
            //         header("Location:registration_complete.php");
            //
            //     	}
            //       else {
            //         ?>
            //         <script type="text/javascript">
            //           alert("Username/Email already exist!");
            //           window.location = 'signup.php';
            //         </script>
            //         <?php
            //       }
            //
            //       //header("Location:signup.php");
            //
            //
            // }
            // else
            // {
            //   header("Location:signup.php");
            //     echo $errorMsg;
            //
            // }




         ?> -->
>>>>>>> bb7b73a06373c83106d140b9fbf88ad9db61b282





    </body>
</html>
