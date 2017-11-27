<?php
session_start();
require_once('helper.php');
require_once('connect.php');

if(isset($_SESSION['current_ID'])){
    header('Location:homepage.php');
    exit;
}

//var use in q

$current_email=$_SESSION['current_email'];
$current_fname=$_SESSION['current_fname'];
$current_lname=$_SESSION['current_lname'];
$current_age=$_SESSION['current_age'];
$current_gender=$_SESSION['current_gender'];
$current_password=$_SESSION['current_password'];

$current_organizer_name=$_POST['organizer_name'];
$current_organizer_email=$_POST['organizer_email'];
$current_organizer_phone=$_POST['organizer_phone'];
$current_organizer_address=$_POST['organizer_address'];




//save data
$_SESSION['current_organizer_name']=$_POST['organizer_name'];
$_SESSION['current_organizer_email']=$_POST['organizer_email'];
$_SESSION['current_organizer_phone']=$_POST['organizer_phone'];
$_SESSION['current_organizer_address']=$_SESSION['organizer_address'];



$q = "INSERT INTO account(account_type,account_email,account_fname,account_lname,account_password,account_age,account_gender)
    VALUES ('Organizer','$current_email','$current_fname','$current_lname','$current_password','$current_age','$current_gender')";
$result = $mysqli->query($q);
if (!$result) {
    echo "<br>INSERT account organ failed. Error: " . $mysqli->error;
} else {
    //insert success
    //echo "suc";
    $q = "SELECT account_ID FROM account WHERE account_email='$current_email'";
    $result = $mysqli->query($q);
    $row = $result->fetch_array();
    if ($row) {
        //echo "add organ account success";
        $_SESSION['wrongSignup_status'] = NULL;
        $_SESSION['current_ID'] = $row['account_ID'];
        $current_ID = $row['account_ID'];
        echo "id is " . $_SESSION['current_ID'];
        $_SESSION['current_organizer_status'] = "1";
        $q = "INSERT INTO organizer(account_ID,organizer_name,organizer_address,organizer_phone,organizer_email,organizer_status)
              VALUES ('$current_ID','$current_organizer_name','$current_organizer_address','$current_organizer_phone','$current_organizer_email','1')";
        $result = $mysqli->query($q);
        if (!$result) {
            echo "<br>INSERT into organ failed. Error: " . $mysqli->error;exit;

        }
        $dir= "users/ID" . $_SESSION['current_ID'];
        mkdir($dir,0700);

        header('Location:login.php');exit;




    } else {
        echo "<br> Select ID fail";
    }
}


?>