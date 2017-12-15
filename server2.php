<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Server</title>
  </head>
  <body>

    <?php


      foreach ($_POST as $key => $value) {
        if (strlen($_POST[$key])==0) {
          echo "$key cannot be emty <br>";
        }

          if ($key=="EventTitle") {
            if (strlen($value)<=100) {

              echo $key." is ".$value."<br>";
            }
            else {
              echo "Title must be under 100 leters! <br>";
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
            elseif ($key=="Details") {
              if (strlen($value)<=500) {
                echo $key." is ".$value."<br>";
              }
              else {
                echo "Detail must be under 500 letters! <br>";
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
