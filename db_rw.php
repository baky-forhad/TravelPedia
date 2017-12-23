<?php
  function updateDB($sql){
  	$conn = mysqli_connect("localhost", "root", "", "travelpedia");
  	if (!$conn) {
  		die("Connection failed: " . mysqli_connect_error());
  	}
  	if(mysqli_query($conn, $sql)) {
  		echo "New records updated successfully";
  	}
  	else{
  		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  	}
  }

  function getJSONFromDB($sql){
  	$conn = mysqli_connect("localhost", "root", "","travelpedia");
  	//echo $sql;
  	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
  	$arr=array();
  	//print_r($result);
  	while($row = mysqli_fetch_assoc($result)) {
  		$arr[]=$row;
  	}
  	return json_encode($arr);
  }
  function getDataFromDB($sql){
  	$conn = mysqli_connect("localhost", "root", "","travelpedia");
  	//echo $sql;
  	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
  	$arr=array();
  	//print_r($result);
  	while($row = mysqli_fetch_assoc($result)) {
  		$arr[]=$row;
  	}
  	return $arr;
  }
  function getCountFromDB($sql){
  	$conn = mysqli_connect("localhost", "root", "","travelpedia");
  	//echo $sql;
  	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
    //$count = 0;
    while($row = mysqli_fetch_assoc($result)) {
  		$arr[]=$row;
  	}
  	return $arr;
  }
  function insertDB($sql)
  {
    $conn = mysqli_connect("localhost", "root", "","travelpedia");
    if (!$conn) {
  		die("Connection failed: " . mysqli_connect_error());
  	}
  	if(mysqli_query($conn, $sql)) {

  		echo "New records inserted successfully";
      return mysqli_insert_id($conn);
  	}
  	else{
  		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  	}
  }
?>
