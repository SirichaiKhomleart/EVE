<?php
session_start();
require_once('helper.php');
require_once('connect.php');


//for q
$current_ID = $_SESSION['current_ID'];
$event_organizer = $_SESSION['current_organizer_name'];

$event_ID = $_POST['eventIDhidden'];
$event_name = $_POST['event_name'];
$event_location = $_POST['event_location'];
$event_typeID = $_POST['event_typeID'];
$event_dateStart = $_POST['event_dateStart'];
$event_dateEnd = $_POST['event_dateEnd'];
$event_timeStart = $_POST['event_timeStart'];
$event_timeEnd = $_POST['event_timeEnd'];
$event_detail = $_POST['event_detail'];

/////
///
/// file upload zone
$target_dir = "users/ID" . $_SESSION['current_ID'] . "/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$event_posterPicture = $target_file;
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
if ($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
} else {
    echo "File is not an image.";
    $uploadOk = 0;
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;

}
//// Check file size
//if ($_FILES["fileToUpload"]["size"] > 500000) {
//    echo "Sorry, your file is too large.";
//    $uploadOk = 0;
//}
// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


$q = "INSERT INTO eventEditLog(event_ID,edit_name,edit_typeID,edit_location,
                        edit_dateStart,edit_dateEnd,edit_timeStart,edit_timeEnd,
                        edit_iconPicture,edit_posterPicture,edit_detail)
    VALUES ('$event_ID','$event_name','$event_typeID','$event_location',
            '$event_dateStart','$event_dateEnd','$event_timeStart','$event_timeEnd',
            '$event_posterPicture','$event_posterPicture','$event_detail')";
echo $q;
$result = $mysqli->query($q);
if (!$result) {
    echo "<br>INSERT editevent failed. Error: " . $mysqli->error;
} else {
    //insert success
    echo "<br>INSERT editevent suc";
}

//$qSearchEventID = "SELECT event_ID FROM event WHERE event_name='$event_name' AND event_organizerID='$current_ID'";
//$resultSearch = $mysqli->query($qSearchEventID);
//$rowSearch = $resultSearch->fetch_array();
//$event_ID = $rowSearch['event_ID'];
//echo "<br>event ID after insert: " . $event_ID;

$ticketloopcount = true;
$ticketTypeNo = 1;
while ($ticketloopcount) {
    echo isset($_POST['ticket_type' . $ticketTypeNo]);
    echo "<br>isset: " . $_POST['ticket_type' . $ticketTypeNo];
    if ($_POST['ticket_type' . $ticketTypeNo] != NULL) {
        echo "<br>type: " . $_POST['ticket_type' . $ticketTypeNo];

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
    <br>
    <a href="organizer_index.php">index</a>

<?php
header('organizer_index.php');
exit;
?>