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
      $lat = $_COOKIE['lat'];
      $lng = $_COOKIE['lng'];
      $date = $_REQUEST['date']."T12:00:00";

      $uri = $darksky.$key.'/'.$lat.','.$lng.','.$date.'?units=ca&exclude=minutely,hourly&lang=en';

      $urlContents = curl($uri);


      $weatherArray = json_decode($urlContents,true);

      //echo $weatherArray['currently']['summary'];

      print_r($_FILES);
      echo sizeof($_FILES['upload_file']['name']);

      $imageName;

      if(isset($_POST['submit']))
      {
        for($i=0;$i<count($_FILES["upload_file"]["name"]);$i++)
        {
         $uploadfile=$_FILES["upload_file"]["tmp_name"][$i];
         //$folder="images/";
         move_uploaded_file($_FILES["upload_file"]["tmp_name"][$i], "images/".date('YmdHis').$i.".jpeg");
         $imageName[$i] = "images/".date('YmdHis').$i.".jpeg";

        }
      }


      //print_r($_COOKIE);

      $travelmates;
      $hash;

      $hashtags = json_decode($_COOKIE['hashtags'],true);

      $tagmates = json_decode($_COOKIE['tagmates'],true);

      foreach ($tagmates as $key) {
        $travelmates[] = $key['tag'];
      }
      foreach ($hashtags as $key) {
        $hash[] = $key['tag'];
      }

      //session_start();

      $userId = $_SESSION['userId'];
      $title = addslashes($_REQUEST['postTitle']);
      $details = addslashes($_REQUEST['details']);
      $location =addslashes( $_REQUEST['locationID']);
      //echo $location;
      $travelDate = $_REQUEST['date'];
      $locationId;
      $postId;

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
        $sqlPost = "INSERT INTO `post`(`postId`,`userId`, `postTitle`, `locationId`, `postDetails`,`travelDate`, `createdBy`, `createdDateTime`) VALUES (null,'$userId','$title','$locationId','$details','$travelDate','$userId',now())";

        $postId = insertDB($sqlPost);

      }
      else {
        $locationId = insertDB($sqlLocation);
        // $locationIdArray = getDataFromDB($sqlLocationId);
        // $locationId = $locationIdArray[0]['locationId'];
        $sqlPost = "INSERT INTO `post`(`userId`, `postTitle`, `locationId`, `postDetails`,`travelDate`, `createdBy`, `createdDateTime`) VALUES ('$userId','$title','$locationId','$details','$travelDate','$userId',now())";

        $postId = insertDB($sqlPost);

      }

      if ($_FILES['upload_file']['name'][0]!="") {
          for ($i=0; $i <sizeof($imageName) ; $i++) {
            $sql = "INSERT INTO `post_image`(`imageId`, `fileLink`, `postId`) VALUES (null,'$imageName[$i]','$postId')";
            insertDB($sql);
          }
      }

      if (isset($hash)) {
          for ($i=0; $i <sizeof($hash) ; $i++) {
            $sqlTagSearch = "SELECT COUNT(tagId) AS numberOfRow from tags where tag = '$hash[$i]'";
            $sqlTagId = "SELECT tagId from tags where tag = '$hash[$i]'";
            $sqlTag = "INSERT INTO `tags`(`tagId`, `tag`) VALUES (null,'$hash[$i]')";

            if (getCountFromDB($sqlTagSearch)[0]['numberOfRow']>0) {

              $tagIdArray = getDataFromDB($sqlTagId);
              $tagId = $tagIdArray[0]['tagId'];
              $sqlPostTag = "INSERT INTO `post_tag`(`postTagId`, `tagId`, `postId`) VALUES (null,'$tagId','$postId')";
              insertDB($sqlPostTag);
            }
            else {
              insertDB($sqlTag);
              $tagIdArray = getDataFromDB($sqlTagId);
              $tagId = $tagIdArray[0]['tagId'];
              $sqlPostTag = "INSERT INTO `post_tag`(`postTagId`, `tagId`, `postId`) VALUES (null,'$tagId','$postId')";
              insertDB($sqlPostTag);
            }


          }
      }

      if (isset($travelmates)) {
          for ($i=0; $i <sizeof($travelmates) ; $i++) {
            $sqlMateSearch = "SELECT COUNT(userId) AS numberOfRow from user where userName = '$travelmates[$i]'";
            $sqlMateId = "SELECT userId from user where userName = '$travelmates[$i]'";


            if (getCountFromDB($sqlMateSearch)[0]['numberOfRow']>0) {

              $mateIdArray = getDataFromDB($sqlMateId);
              $mateId = $mateIdArray[0]['userId'];
              $sqlMate = "INSERT INTO `travel_mate`(`travelMateId`, `postId`, `userId`) VALUES (null,'$postId','$mateId')";
              insertDB($sqlMate);
            }
            else {

            }


          }
      }




    }





?>
