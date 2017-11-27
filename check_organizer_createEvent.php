<?php
session_start();
require_once('helper.php');
require_once('connect.php');



//for q
$current_ID=$_SESSION['current_ID'];
$event_organizer=$_SESSION['current_organizer_name'];

$event_name=$_POST['event_name'];
$event_dateStart=$_POST['event_dateStart'];
$event_dateEnd=$_POST['event_dateEnd'];
$event_timeStart=$_POST['event_timeStart'];
$event_timeEnd=$_POST['event_timeEnd'];
$event_detail=$_POST['event_detail'];

$ticketloopcount=true;
$ticketTypeNo=1;

while($ticketloopcount){
    if (isset($_POST['ticket_type'.$ticketTypeNo])){
        echo $_POST['ticket_type'.$ticketTypeNo];
        $ticketTypeNo=$ticketTypeNo+1;
    }else{
        echo "end";
        $ticketloopcount=false;
    }
}


?>