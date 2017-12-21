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
    $lat = $_REQUEST['lat'];
    $lng = $_REQUEST['lng'];
    $date = "2017-11-25T12:00:00";

    $uri = $darksky.$key.'/'.$lat.','.$lng.','.$date.'?units=ca&exclude=minutely,hourly&lang=en';

    $urlContents = curl($uri);


    $weatherArray = json_decode($urlContents,true);

    echo $weatherArray['currently']['summary'];
    //print_r($weatherArray);


?>
