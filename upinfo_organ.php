<?php
	$userid = $_GET['userid'];
	require_once('connect.php');
	if(isset($userid)) {
		$q="UPDATE organizer SET organizer_status = '1' WHERE organizer.account_ID = '".$userid."'";
			if(!$mysqli->query($q)){
				echo "DELETE failed. Error: ".$mysqli->error ;
		   }
		   $mysqli->close();
		   
		   //redirect
		   header("Location: admin_search_organ.php");
	}
?>
