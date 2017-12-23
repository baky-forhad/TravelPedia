<?php

    function isloggedIn()
    {
<<<<<<< HEAD
        
=======
        //session_start();
>>>>>>> cd2741456b2185d47d329aaa41170dcb398475f1
        return ($_SESSION["IsloggedIn"] && isset($_SESSION["IsloggedIn"]) )==True ? True : False;
    }


    function isValidMail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }


    function isValidName($name)
    {
        $len = strlen(trim($name));
        $valid= true;
        if($len<4)
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
                    return false;

                }
            }
        }
        return true;

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

    function isValidUserName($Uname)
    {
        $length = strlen($Uname);
        if( !(($Uname[0]>='a' && $Uname[0]<='z') || ($Uname[0]>='A' && $Uname[0]<='Z') ) ){
            return false;
        }
        if ($Uname<6)
        {
            return false;
        }
        for($i=1; $i<$length; $i++){
            if( !(($Uname[$i]>='a' && $Uname[$i]<='z') || ($Uname[$i]>='A' && $Uname[$i]<='Z') || $Uname[$i]=='-' || $Uname=='_') )
            {
                return false;

            }
        }
    }

?>
