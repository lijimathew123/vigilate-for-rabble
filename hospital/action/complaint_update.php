<?php
	include("../auth.php");
	include('../../connect/db.php');
	$cmpsid=$_POST['cmpsid'];
	$kbhnreply=$_POST['kbhnreply'];
	$kdate=$_POST['kdate'];
	
	$kst=$_POST["kst"];
	
	$sql = "update poplecomplaintpost set kbhnreply='$kbhnreply',kdate='$kdate',kst='$kst' where cmpsid='$cmpsid'";
	$q1 = $db->prepare($sql);
	$q1->execute();
	
	header("location:../people_claims_search.php");

?>						

