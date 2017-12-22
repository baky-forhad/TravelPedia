<?php

    function curl($url){
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_FOLLOWLOCATION,true);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }

    $darksky = 'https://api.darksky.net/forecast/';
    $key = '0b6726d08b07065962dd6cd45d54bbfd';
    $lat = $_COOKIE['lat'];
    $lng = $_COOKIE['lng'];
    $date = $_REQUEST['date']."T12:00:00";

    $uri = $darksky.$key.'/'.$lat.','.$lng.','.$date.'?units=ca&exclude=minutely,hourly&lang=en';

    $urlContents = curl($uri);


    $weatherArray = json_decode($urlContents,true);

    //echo $weatherArray['currently']['summary'];

    print_r($_FILES);

    $imageName;

    if(isset($_POST['submit']))
    {
      for($i=0;$i<count($_FILES["upload_file"]["name"]);$i++)
      {
       $uploadfile=$_FILES["upload_file"]["tmp_name"][$i];
       //$folder="images/";
       move_uploaded_file($_FILES["upload_file"]["tmp_name"][$i], "images/".date('YmdHis').$i.".jpeg");
       $imageName[$i] = "images/".date('YmdHis')."image.jpeg";

      }
    }


    //print_r($_COOKIE);

    $tagmates = json_decode($_COOKIE['tagmates'],true);

    foreach ($tagmates as $key) {
      echo $key['tag'];
    }

    


?>
