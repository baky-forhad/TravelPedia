<?php

//array for databse connection parameter

$db['db_host']="sql206.epizy.com";
$db['db_user']="epiz_20451030";
$db['db_pass']="softwareproject";
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
