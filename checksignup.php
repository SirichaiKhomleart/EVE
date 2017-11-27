<?php
session_start();
require_once('helper.php');
require_once('connect.php');

if(isset($_SESSION['current_ID'])){
    header('Location:homepage.php');
    exit;
}

//var use in q
$current_email=$_POST['email'];
$current_fname=$_POST['fname'];
$current_lname=$_POST['lname'];
$current_age=$_POST['age'];
$current_gender=$_POST['gender'];
$current_password=$_POST['password'];
//////zone for detect abnormal signup
/////
/////
//$q = "SELECT account_email FROM account WHERE account_email='$current_email'";
//$result = $mysqli->query($q);
//$row = $result->fetch_array();
//echo "thisisrow ".$row;
////check some field not input
//if (!isset($_POST['email']) ||
//    !isset($_POST['fname']) ||
//    !isset($_POST['lname']) ||
//    !isset($_POST['age']) ||
//    !isset($_POST['password']) ||
//    !isset($_POST['cpassword'])
//)
//{
//    echo "not filled";
//    session_destroy();
//    session_start();
//    $_SESSION['wrongSignup_status'] = "Please fills the form correctly.";
//}
//
////check email already activate
//elseif ($row) {
//    echo "repeat mail";
//    session_destroy();
//    session_start();
//    $_SESSION['wrongSignup_status'] = "This email already sign up with us.";
//}
////
//
//
//
//
//////endzone abnormal signup




//save data
$_SESSION['current_email']=$_POST['email'];
$_SESSION['current_fname']=$_POST['fname'];
$_SESSION['current_lname']=$_POST['lname'];
$_SESSION['current_name']=$_SESSION['current_fname']." ".$_SESSION['current_lname'];
$_SESSION['current_age']=$_POST['age'];
$_SESSION['current_gender']=$_POST['gender'];
$_SESSION['current_password']=$_POST['password'];

//for detect organiner signup
//if($_POST['OrganSignup']==True) {
//    //echo "organ signup true";
//    $_SESSION['current_type'] = "Organizer";
//    header('Location:signup_organizer.php');
//    exit;
//}
//q
if (!isset($_SESSION['wrongSignup_status']) && $_POST['OrganSignup']!="True") {


    $q = "INSERT INTO account(account_type,account_email,account_fname,account_lname,account_password,account_age,account_gender)
    VALUES ('Customer','$current_email','$current_fname','$current_lname','$current_password','$current_age','$current_gender')";
    $result = $mysqli->query($q);
    if (!$result) {
        echo "<br>INSERT account failed. Error: " . $mysqli->error;
    } else {
        //insert success
        //echo "suc";
        $q = "SELECT account_ID FROM account WHERE account_email='$current_email'";
        $result = $mysqli->query($q);
        $row = $result->fetch_array();
        if ($row) {
            //echo "add custom account success";
            $_SESSION['wrongSignup_status'] = NULL;
            $_SESSION['current_ID'] = $row['account_ID'];
            $current_ID = $row['account_ID'];
            $_SESSION['current_type'] = "Customer";
            echo "id is " . $_SESSION['current_ID'];
            $_SESSION['current_customer_status'] = "1";
            $q = "INSERT INTO customer(account_ID,customer_status) 
             VALUES('$current_ID','1')";
            $result = $mysqli->query($q);
            if (!$result) {
                echo "<br>INSERT customer failed. Error: " . $mysqli->error; exit;
            }
            $dir= "users/ID" . $_SESSION['current_ID'];
            mkdir($dir,0700);
            header('Location:login.php'); exit;
        } else {
            echo "<br> Select ID fail";
        }
    }

}elseif (!isset($_SESSION['wrongSignup_status']) && $_POST['OrganSignup']=="True"){

    //echo "organ signup true";
    $_SESSION['current_type'] = "Organizer";
    header('Location:signup_organizer.php');
    exit;

}else{
    echo "Some thing wrong when sign up";
    //header('Location:signup.php'); exit;
}
?>