<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Validity checking</title>
    </head>
    <body>
        <?php
            $isSubmitValid = False;
            $query="INSERT INTO POST (";

            foreach ($_POST as $key => $value)
            {
                $isSubmitValid=False;
                if(strlen($value)==0)
                {
                    echo "1.you must fill all the field\n";
                    break;
                }
                else
                {
                    if($key == "day" && $value=="=-1")
                    {
                        echo "2.you must fill all the field\n";
                        break;
                    }
                    if($key == "month" && $value=="=-1")
                    {
                        echo "3.you must fill all the field\n";
                        break;
                    }
                    if($key == "year" && $value=="=-1")
                    {
                        echo "4.you must fill all the field\n";
                        break;
                    }
                    else
                    {
                        $isSubmitValid=True;
                    }
                    if($isSubmitValid)
                    {
                        $query.="'".$_POST[$key]."'";

                    }

                }



            }
            if($isSubmitValid)
            {
                $query.=")";
                echo "<br>".$query;
            }

            print_r($_POST);






         ?>

    </body>
</html>
