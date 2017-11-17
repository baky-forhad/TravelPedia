<?php
    session_start();
    function isloggedIn()
    {
        return ($_SESSION["IsloggedIn"] && isset($_SESSION["IsloggedIn"]) )==True ? True : False;
    }


    function isValidMail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);            
    }


    function isValidName($name)
    {
        $len = strlen($name);
        $valid= true;
        if($len<2)
        {
            return false;
        }
        else
        {
            if( !(($name[0]>='a' && $name[0]<='z') || ($name[0]>='A' && $name[0]<='Z') ) ){
                return false;
            }
            for($i=1; $i<$len; $i++){
                if( !(($name[$i]>='a' && $name[$i]<='z') || ($name[$i]>='A' && $name[$i]<='Z')) )
                {
                    $valid = false;
                    break;
                }
            }
        }

    }


    function isPasswordValid($pass,$confirmpass)
    {
        $uppercase = preg_match('@[A-Z]@', $pass);
        $lowercase = preg_match('@[a-z]@', $pass);
        $number    = preg_match('@[0-9]@', $pass);

        if(!$uppercase || !$lowercase || !$number || strlen($pass) < 8 )
        {
            return false;
        }
        elseif ($pass !== $confirmpass)
        {
            return false;
        }
        else
        {
            return true;
        }

    }

    function isValidDate($day,$month,$year)
    {
        return checkdate($month,$day,$year);
    }

?>
