<?php
    session_start();
    include 'function.php';
    include 'db_rw.php';

    if (!isloggedIn()) {
      header('Location:login.php');
    }
    else {
      function curl($url){
          $ch = curl_init();
          curl_setopt($ch,CURLOPT_URL,$url);
          curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
          curl_setopt($ch,CURLOPT_FOLLOWLOCATION,true);
          $data = curl_exec($ch);
          curl_close($ch);
          return $data;
      }
      //print_r($GLOBALS);

      $darksky = 'https://api.darksky.net/forecast/';
      $key = '0b6726d08b07065962dd6cd45d54bbfd';
      $lat = $_REQUEST['lat'];
      $lng = $_REQUEST['lng'];
      //$date = $_REQUEST['date']."T12:00:00";

      $uri = $darksky.$key.'/'.$lat.','.$lng.'?units=ca&exclude=minutely,hourly&lang=en';

      $urlContents = curl($uri);


      $weatherArray = json_decode($urlContents,true);

      //echo $weatherArray['currently']['summary'];


      $userId = $_SESSION['userId'];

      $location =addslashes( $_REQUEST['location']);
      //echo $location;

      $locationId;
      $historyId;

      $summary = $weatherArray['currently']['summary'];
      $temperature = $weatherArray['currently']['temperature'];
      $apparentTemperatur = $weatherArray['currently']['apparentTemperature'];


      $sqlLocationSearch = "SELECT COUNT(locationId) AS numberOfRow from location where placeName = '$location'";

      $sqlLocationId = "SELECT locationId from location where placeName = '$location'";

      $sqlLocation = "INSERT INTO `location`(`placeName`, `latitude`, `longitude`) VALUES ('$location','$lat','$lng')";

      //echo getCountFromDB($sqlLocationSearch)[0]['numberOfRow'];

      //print_r(getCountFromDB($sqlLocationSearch));


      if (getCountFromDB($sqlLocationSearch)[0]['numberOfRow']>0) {
        $locationIdArray = getDataFromDB($sqlLocationId);
        $locationId = $locationIdArray[0]['locationId'];
        $sqlHistory = "INSERT INTO `travel_history`(`userId`, `locationId`, `visitDate`, `summary`, `temperature`, `apparentTemperature`, `createdBy`, `createdDateTime`) VALUES ('$userId','$locationId',now(),'$summary','$temperature','$apparentTemperatur','$userId',now())";

        $historyId = insertDB($sqlHistory);

      }
      else {
        $locationId = insertDB($sqlLocation);
        // $locationIdArray = getDataFromDB($sqlLocationId);
        // $locationId = $locationIdArray[0]['locationId'];
        $sqlHistory = "INSERT INTO `travel_history`(`userId`, `locationId`, `visitDate`, `summary`, `temperature`, `apparentTemperature`, `createdBy`, `createdDateTime`) VALUES ('$userId','$locationId',now(),'$summary','$temperature','$apparentTemperatur','$userId',now())";

        $historyId = insertDB($sqlHistory);

      }





      




    }





?>
