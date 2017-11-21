<?php
session_start();
require_once('connect.php');

$mail =$_POST['email'];
$pw=$_POST['password'];

echo "Username is ".$mail;
echo "<br>Password is ".$pw."<br>";


$q = "SELECT * FROM account WHERE account_email= '$mail' AND account_password = '$pw'";
$result = $mysqli->query($q);
$row = $result->fetch_array();

if($row)
{
    echo "Login success";
    $accountid = $row['account_ID'];
    echo "<br><br> Account's ID is ".$row['account_ID'];
    echo "<br> Account's e-mail is ".$row['account_email'];
    echo "<br> Account's name is ".$row['account_fname']." ".$row['account_lname'];
    if ($row['account_type']=="Admin"){
        echo "<br><br>This is Admin account";
        $q = "SELECT * FROM admin NATURAL JOIN account 
                            WHERE admin.account_ID = '$accountid'";
        $result = $mysqli->query($q);
        $row = $result->fetch_array();
        if ($row){
            echo "<br>Staff ID: ".$row['staff_ID'];
            echo "<br>Staff Position: ".$row['staff_position'];
        }
    }
    else if ($row['account_type']=="Organizer"){
        echo "<br><br>This is Organizer account";
        $q = "SELECT * FROM organizer NATURAL JOIN account 
                            WHERE organizer.account_ID = '$accountid'";
        $result = $mysqli->query($q);
        $row = $result->fetch_array();
        if ($row){
            echo "<br>Organizer Name: ".$row['organizer_name'];
            echo "<br>Organizer Address: ".$row['organizer_address'];
            echo "<br>Organizer Phone Number: ".$row['organizer_phone'];
            echo "<br>Organizer E-Mail: ".$row['organizer_email'];
            echo "<br>Organizer Status: ".$row['organizer_status'];
        }
    }
    else if ($row['account_type']=="Customer") {
        echo "<br><br>This is Customer account";
        $q = "SELECT * FROM customer NATURAL JOIN account  
                            WHERE customer.account_ID = '$accountid'";
        $result = $mysqli->query($q);
        $row = $result->fetch_array();
        if ($row) {
            echo "<br>Customer Age: " . $row['customer_age'];
            echo "<br>Customer Status: " . $row['customer_status'];
        }
    }
    /*$_SESSION['id']=$row['id'];
    $_SESSION['name']=$row['name'];
    $_SESSION['email']=$row['email'];
    $_SESSION['username']=$row['username'];
    header('Location: content.php');*/
}
else
{
    echo "Incorrect username or password!!";
    echo "<br><a href='login.php'>Retry Login</a>";
}

?>