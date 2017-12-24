<?php
 include 'db_rw.php';
 session_start()
 $userId = $_SESSION['userId'];

 $sql ="select postId,locationId from post where userId='$userId'";
 $UserPost=getDataFromDB($sql);
 foreach ($UserPost as $post)
 {
    $postId=$post['postId'];
    $sql ="select userId from travel_mate where postId='$postId' and userId!-='$userId'";
    $travelmate=getDataFromDB($sql);
    foreach ($travelmate as $mate)
    {
        $mateId=$mate['userId'];
        $sql ="select locationId from post where userId='$mateId'";
        $location = getDataFromDB($sql);
        foreach ($location as $loc)
        {
            $locationid = $loc['locationId'];
            $sql ="select placeName from post where userId='$locationid'";
            $suggestions = getDataFromDB($sql);
            foreach ($suggestions as $key) {
                $place = $key['placeName'];

            }


        }

    }

}





?>
