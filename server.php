<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Server</title>
  </head>
  <body>

    <?php

        function startsWith($haystack, $needle)
        {
          $length = strlen($needle);
          return (substr($haystack, 0, $length) === $needle);
        }

      foreach ($_POST as $key => $value) {
        if (strlen($_POST[$key])==0) {
          echo "$key cannot be emty <br>";
        }
        if (!isset($_POST["Gender"]))
        {
          echo "Gender must be selected <br>";
        }
          if ($key=="Phone") {
            if (strlen($value)==11 and startsWith($value,"01")) {

              echo $key." is ".$value."<br>";
            }
            else {
              echo "Phone number is not valid! <br>";
            }
          }
          elseif ($key=="Month") {
            # code...
          }
          elseif ($key=="Year") {
            # code...
          }


            elseif ($key=="Day") {
              if($_POST["Day"]=="31" and ($_POST["Month"]=="2" or $_POST["Month"]=="4") or $_POST["Month"]=="6" or $_POST["Month"]=="9" or $_POST["Month"]=="11")
           {
             echo "invalid date<br>";
           }
           elseif ($_POST["Day"]=="DD" or $_POST["Month"]=="MM" or $_POST["Year"]=="YYYY") {
             echo "invalid date<br>";
           }
           else if(!((0 == $_POST["Year"] % 4) and (0 != $_POST["Year"] % 100) or (0 == $_POST["Year"] % 400)) and $_POST["Month"]=="2" and $_POST["Day"]=="29")
           {
             echo" invalid leap year!<br>";
           }
           else {
             echo "birthday is :" .$_POST["Day"]." ".$_POST["Month"]." ".$_POST["Year"]."<br>";
           }

            }
            elseif ($key=="Password") {
              if (strlen($value)>=8) {
                echo $key." is ".$value."<br>";
              }
              else {
                echo "Password is not valid! <br>";
              }
            }
            elseif ($key=="ReenterPassword") {
              if ($_POST["Password"]==$value) {
                echo $key." is ".$value."<br>";
              }
              else {
                echo "Password doesnot match! <br>";
              }
            }
            elseif ($key=="sbt") {
              # code...
            }
            elseif ($key=="Email") {
              # code...
              $email = $value;
              if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Invalid email format <br>";
              }
              else {
                echo $key." is ".$value."<br>";
              }
            }
            else {
              echo $key." is ".$value."<br>";
            }

          




      }

      //print_r($GLOBALS);





     ?>

  </body>
</html>
