<?php

//array for databse connection parameter

$db['db_host']="192.168.0.6";
$db['db_user']="epiz_20451030";
<<<<<<< HEAD
$db['db_pass']="softwareproject";
=======
$db['db_pass']="raid";
>>>>>>> f3d092b2abd2bbc8afef103c7f0805b8cd8afa83
$db['db_name']="epiz_20451030_travelpedia";

//making constant
foreach($db as $key => $value){

    define( strtoupper($key), $value);
}

//function for creating db connection

$connection = mysqli_connect(DB_HOST,DB_USER, DB_PASS, DB_NAME);

 if(!$connection)
     echo "error";
 else{
 	echo "fuck yeah";
 }

 echo "end of php";

?>
