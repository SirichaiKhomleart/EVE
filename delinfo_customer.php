<?php
	$userid = $_GET['userid'];
	require_once('connect.php');
	if(isset($userid)) {
		$q="UPDATE customer SET customer_status = '0' WHERE customer.account_ID = '".$userid."'";
			if(!$mysqli->query($q)){
				echo "DELETE failed. Error: ".$mysqli->error ;
		   }
		   $mysqli->close();
		   
		   //redirect
		   header("Location: admin_search_user.php");
	}
?>
