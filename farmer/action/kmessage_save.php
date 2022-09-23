<?php
	include("../auth.php");
	include('../../connect/db.php');
	$Log_Id=$_SESSION['SESS_FARMER_ID'];
	
	$name=$_POST["name"];
	$kbhn=$_POST["kbhn"];
	$cntno=$_POST["cntno"];
	$date=$_POST["date"];
	$descp=$_POST["descp"];
	$subj=$_POST["subj"];

	
	
$sql = "insert into kmessage(Log_Id,name,kbhn,cntno,date,descp,subj)values('$Log_Id','$name','$kbhn','$cntno','$date','$descp','$subj')";
$q1 = $db->prepare($sql);
$q1->execute();
	
header("location:../message_krishibhavan.php");

?>						

