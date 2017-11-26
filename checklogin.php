<?php
session_start();
require_once('helper.php');
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
    $_SESSION['wrongLogin_status']=NULL;
    session_destroy();
    session_start();
    $accountid = $row['account_ID'];
    echo "<br><br> Account's ID is ".$row['account_ID'];
    echo "<br> Account's e-mail is ".$row['account_email'];
    echo "<br> Account's name is ".$row['account_fname']." ".$row['account_lname'];
    echo "<br> Account's age is ".$row['account_age'];
    echo "<br> Account's gender is ".$row['account_gender'];


    $_SESSION['current_ID']=$row['account_ID'];
    $_SESSION['current_fname']=$row['account_fname'];
    $_SESSION['current_lname']=$row['account_lname'];
    $_SESSION['current_name']=$row['account_fname']." ".$row['account_lname'];
    $_SESSION['current_email']=$row['account_email'];
    $_SESSION['current_password']=$row['account_password'];
    $_SESSION['current_age']=$row['account_age'];
    $_SESSION['current_gender']=$row['account_gender'];
    $_SESSION['current_type']=$row['account_type'];

    if ($row['account_type']=="Admin"){
        echo "<br><br>This is Admin account";
        $q = "SELECT * FROM admin NATURAL JOIN account 
                            WHERE admin.account_ID = '$accountid'";
        $result = $mysqli->query($q);
        $row = $result->fetch_array();
        if ($row){
            echo "<br>Staff ID: ".$row['staff_ID'];
            echo "<br>Staff Position: ".$row['staff_position'];


            $_SESSION['current_staff_id']=$row['staff_ID'];
            $_SESSION['current_staff_position']=$row['staff_position'];

            echo "<br><a href='admin_index.php'>Administrator Index</a>";

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

            $_SESSION['current_organizer_name']=$row['organizer_name'];
            $_SESSION['current_organizer_address']=$row['organizer_address'];
            $_SESSION['current_organizer_phone']=$row['organizer_phone'];
            $_SESSION['current_organizer_email']=$row['organizer_email'];
            $_SESSION['current_organizer_status']=$row['organizer_status'];

            echo "<br><a href='organizer_index.php'>Organizer Index</a>";


        }
    }
    else if ($row['account_type']=="Customer") {
        echo "<br><br>This is Customer account";
        $q = "SELECT * FROM customer NATURAL JOIN account  
                            WHERE customer.account_ID = '$accountid'";
        $result = $mysqli->query($q);
        $row = $result->fetch_array();
        if ($row) {
            echo "<br>Customer Status: " . $row['customer_status'];

            $_SESSION['current_customer_status']=$row['customer_status'];

            echo "<br><a href='customer_index.php'>Customer Index</a>";
        }
    }

    else{
        echo "<br><br>This account is invalid. (Not specific type) 
              <br>Please contact website administrator ";

        echo "<br><a href='logout.php'>Logout</a>";



    }
    /*$_SESSION['id']=$row['id'];
    $_SESSION['name']=$row['name'];
    $_SESSION['email']=$row['email'];
    $_SESSION['username']=$row['username'];
    header('Location: content.php');*/
}
else
{
    //echo "Incorrect username or password!!";
    $_SESSION['wrongLogin_status']="Incorrect username or password!";
    //echo "<br><a href='login.php'>Retry Login</a>";
    header('Location: login.php');
    exit;
}

?>