<?php
	include("../auth.php");
	include('../../connect/db.php');
	
	$hmsg_id=$_POST["hmsg_id"];
	$reply=$_POST["reply"];
	
	$rdate=date("Y-m-d");

	
$sql = "update hmessage set reply='$reply',rdate='$rdate' where hmsg_id='$hmsg_id'";
$q1 = $db->prepare($sql);
$q1->execute();
	
header("location:../message_people.php");

?>						

