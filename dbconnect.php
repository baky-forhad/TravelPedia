<?php

//array for databse connection parameter

$db['db_host']="localhost";
$db['db_user']="root";
$db['db_pass']="";
$db['db_name']="travelpedia";

//making constant
foreach($db as $key => $value){

    define( strtoupper($key), $value);
}

//function for creating db connection

$connection = mysqli_connect(DB_HOST,DB_USER, DB_PASS, DB_NAME);

 if(!$connection)
     echo "error";

     function getConnection()
     {
       global $connection;
       return $connection;
     }

?>
