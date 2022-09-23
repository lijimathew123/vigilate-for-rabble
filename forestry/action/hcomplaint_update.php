<?php
	include("../auth.php");
	include('../../connect/db.php');
	$cmpsid=$_POST['cmpsid'];
	$frestryreply=$_POST['frestryreply'];
	$fdate=$_POST['fdate'];
	
	$fsat=$_POST["fsat"];
	
	$sql = "update poplecomplaintpost set frestryreply='$frestryreply',fdate='$fdate',fsat='$fsat' where cmpsid='$cmpsid'";
	$q1 = $db->prepare($sql);
	$q1->execute();
	
	header("location:../people_claims_search.php");

?>						

