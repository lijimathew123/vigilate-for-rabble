<?php
	include("../auth.php");
	include('../../connect/db.php');
	
	$fmsg_id=$_POST["fmsg_id"];
	$reply=$_POST["reply"];
	
	$rdate=date("Y-m-d");

	
$sql = "update fmessage set reply='$reply',rdate='$rdate' where fmsg_id='$fmsg_id'";
$q1 = $db->prepare($sql);
$q1->execute();
	
header("location:../message.php");

?>						

