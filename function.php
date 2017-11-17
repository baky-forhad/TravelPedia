<?php
    session_start();
    function IsloggedIn()
    {
        return ($_SESSION["IsloggedIn"] && isset($_SESSION["IsloggedIn"]) )==True ? True : False;

    }



?>
