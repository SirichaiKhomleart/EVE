<?php
session_start();
require_once('helper.php');
require_once('connect.php');


//for q
$current_ID = $_SESSION['current_ID'];
$event_organizer = $_SESSION['current_organizer_name'];

$event_name = $_POST['event_name'];
$event_location = $_POST['event_location'];
$event_typeID = $_POST['event_typeID'];
$event_dateStart = $_POST['event_dateStart'];
$event_dateEnd = $_POST['event_dateEnd'];
$event_timeStart = $_POST['event_timeStart'];
$event_timeEnd = $_POST['event_timeEnd'];
$event_detail = $_POST['event_detail'];


$q = "INSERT INTO event(event_name,event_organizerID,event_typeID,event_location,
                        event_dateStart,event_dateEnd,event_timeStart,event_timeEnd,
                        event_posterPicture,event_detail)
    VALUES ('$event_name','$current_ID','$event_typeID','$event_location',
            '$event_dateStart','$event_dateEnd','$event_timeStart','$event_timeEnd',
            'test','$event_detail')";
$result = $mysqli->query($q);
if (!$result) {
    echo "<br>INSERT event failed. Error: " . $mysqli->error;
} else {
    //insert success
    echo "<br>INSERT event suc";
}

$qSearchEventID = "SELECT event_ID FROM event WHERE event_name='$event_name' AND event_organizerID='$current_ID'";
$resultSearch = $mysqli->query($qSearchEventID);
$rowSearch = $resultSearch->fetch_array();
$event_ID = $rowSearch['event_ID'];
echo "<br>event ID after insert: ".$event_ID;

$ticketloopcount = true;
$ticketTypeNo = 1;
while ($ticketloopcount) {
    if (isset($_POST['ticket_type' . $ticketTypeNo])) {
        echo "<br>type: ".$_POST['ticket_type' . $ticketTypeNo];

        $ticketType = $_POST['ticket_type' . $ticketTypeNo];
        $ticketPrice = $_POST['ticket_price' . $ticketTypeNo];
        $ticketTotal = $_POST['ticket_total' . $ticketTypeNo];

        $qInsertTicket = "INSERT INTO ticketType(event_ID,ticketType_name,ticketType_price,ticketType_totalSeats)
              VALUES ('$event_ID','$ticketType','$ticketPrice','$ticketTotal')";
        $resultInsertTicket = $mysqli->query($qInsertTicket);
        echo "<br>INSERT TICKET: " . $ticketTypeNo;
        if (!$resultInsertTicket) {
            echo "<br>INSERT ticket failed. Error: " . $mysqli->error;
        } else {
            //insert success
            echo "<br>INSERT ticket suc";
        }


        $ticketTypeNo = $ticketTypeNo + 1;
    } else {
        echo "<br>Insert ticket end";
        $ticketloopcount = false;
    }
}



?>
<a href="organizer_index.php">index</a>
