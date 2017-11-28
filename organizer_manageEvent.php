<?php
session_start();
require_once('helper.php');
require_once('connect.php');

//case user not login yet
if (!isset($_SESSION['current_ID'])) {
    header('Location: homepage.php');
    exit;
}
//case user type isn't Organ
if (isset($_SESSION['current_type'])) {
    if ($_SESSION['current_type'] != "Organizer") {
        header('Location: homepage.php');
        exit;
    }
} else {
    header('Location: homepage.php');
    exit;
}
$fromUser = $_POST['fromUser'];
echo "<br>user: " . $fromUser;
$fromEvent = $_POST['fromEvent'];
echo "<br>event: " . $fromEvent;
$submitAct = $_POST['submitAction'];
echo "<br>submit: " . $submitAct;

if ($submitAct == "Cancel") {
    $qcancle = "UPDATE event SET event_approveStatus = '2' 
                WHERE event_ID = '$fromEvent' 
                AND event_organizerID = '$fromUser' ";

    $resultcancle = $mysqli->query($qcancle);
    if (!$resultcancle) {
        echo "<br>CANCEL event failed. Error: " . $mysqli->error;
    } else {
        //insert success
        echo "<br>CANCEL event suc";
    }

    echo "<br>MANAGE EVENT PAGE REACH";

}elseif ($submitAct == "Statistic"){
    header('Location: org_each_event_stat.php?event='.$fromEvent);
}elseif ($submitAct == "Edit")

?>
