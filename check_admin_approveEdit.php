<?php
session_start();
require_once('helper.php');
require_once('connect.php');

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <?php html_headcode(); ?>
    </head>

<body data-target="#nino-navbar" data-spy="scroll">
<!--facebook embed section-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.10";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!--end facebook embed section-->

<!-- Header
    ================================================== -->
<header id="nino-header2">
    <?php header_zone(); ?>
</header><!--/#header-->


<?php

$eventID = $_POST['eventIDsend'];
$eventName = $_POST['eventNamesend'];
$button = $_POST['appeditact'];
echo "<br>eventID id : " . $eventID;


if ($button == "Approve") {
    $qnew = "SELECT * FROM eventEditLog WHERE event_ID = '$eventID' ORDER BY edit_timeStamp DESC";
    $resultnew = $mysqli->query($qnew);
    if (!$resultnew) {
        echo "<br>Get new data for set 1 failed. Error: " . $mysqli->error;
    } else {
        echo "<br>Get new data for set 1 suc";
        $row = $resultnew->fetch_array();

        $new_name=$row['edit_name'];
        $new_typeID=$row['edit_typeID'];
        $new_location=$row['edit_location'];
        $new_dateStart=$row['edit_dateStrat'];
        $new_dateEnd=$row['edit_dateEnd'];
        $new_timeStart=$row['edit_timeStart'];
        $new_timeEnd=$row['edit_timeEnd'];
        $new_iconPicture=$row['edit_iconPicture'];
        $new_posterPicture=$row['edit_posterPicture'];
        $new_detail=$row['edit_detail'];

    }


    $q = "UPDATE eventEditLog SET edit_approveStatus = '1' WHERE event_ID = '$eventID'";
    $result = $mysqli->query($q);
    if (!$result) {
        echo "<br>Set 1 failed. Error: " . $mysqli->error;
    } else {
        echo "<br>Set 1 succ.";

    }

    $q = "UPDATE event SET  event_name='$new_name', 
                            event_typeID='$new_typeID',
                            event_location='$new_location',
                            event_dateStart='$new_dateStart',
                            event_dateEnd='$new_dateEnd',
                            event_timeStart='$new_timeStart',
                            event_timeEnd='$new_timeEnd',
                            event_iconPicture='$new_iconPicture',
                            event_posterPicture='$new_posterPicture',
                            event_detail='$new_detail'
          WHERE event_ID = '$eventID'";
    $result = $mysqli->query($q);
    if (!$result) {
        echo "<br>Fetch failed. Error: " . $mysqli->error;
    } else {
        echo "<br>Fetch succ.";

    }

    $q = "UPDATE ticketType SET  ticketType_approveStatus='1'
          WHERE event_ID = '$eventID' AND ticketType_approveStatus IS NULL";
    $result = $mysqli->query($q);
    if (!$result) {
        echo "<br>Ticket failed. Error: " . $mysqli->error;
    } else {
        echo "<br>Ticket succ.";

    }


}elseif ($button == "Disapprove") {
//    $qnew = "SELECT * FROM eventEditLog WHERE event_ID = '$eventID' ORDER BY edit_timeStamp DESC";
//    $resultnew = $mysqli->query($qnew);
//    if (!$resultnew) {
//        echo "<br>Get new data for set 1 failed. Error: " . $mysqli->error;
//    } else {
//        echo "<br>Get new data for set 1 suc";
//        $row = $resultnew->fetch_array();
//
//        $new_name=$row['edit_name'];
//        $new_typeID=$row['edit_typeID'];
//        $new_location=$row['edit_location'];
//        $new_dateStart=$row['edit_dateStrat'];
//        $new_dateEnd=$row['edit_dateEnd'];
//        $new_timeStart=$row['edit_timeStart'];
//        $new_timeEnd=$row['edit_timeEnd'];
//        $new_iconPicture=$row['edit_iconPicture'];
//        $new_posterPicture=$row['edit_posterPicture'];
//        $new_detail=$row['edit_detail'];
//
//    }


    $q = "UPDATE eventEditLog SET edit_approveStatus = '0' WHERE event_ID = '$eventID'";
    $result = $mysqli->query($q);
    if (!$result) {
        echo "<br>Set 0 failed. Error: " . $mysqli->error;
    } else {
        echo "<br>Set 0 succ.";

    }

//    $q = "UPDATE event SET  event_name='$new_name',
//                            event_typeID='$new_typeID',
//                            event_location='$new_location',
//                            event_dateStart='$new_dateStart',
//                            event_dateEnd='$new_dateEnd',
//                            event_timeStart='$new_timeStart',
//                            event_timeEnd='$new_timeEnd',
//                            event_iconPicture='$new_iconPicture',
//                            event_posterPicture='$new_posterPicture',
//                            event_detail='$new_detail'
//          WHERE event_ID = '$eventID'";
//    $result = $mysqli->query($q);
//    if (!$result) {
//        echo "<br>Fetch failed. Error: " . $mysqli->error;
//    } else {
//        echo "<br>Fetch succ.";
//
//    }

    $q = "UPDATE ticketType SET  ticketType_approveStatus='0'
          WHERE event_ID = '$eventID' AND ticketType_approveStatus IS NULL";
    $result = $mysqli->query($q);
    if (!$result) {
        echo "<br>Ticket failed. Error: " . $mysqli->error;
    } else {
        echo "<br>Ticket succ.";

    }


}
