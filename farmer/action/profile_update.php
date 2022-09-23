<?php
	include("../auth.php");
	include('../../connect/db.php');
	$Log_Id=$_SESSION['SESS_FARMER_ID'];
	
	$name=$_POST["name"];
	$sex=$_POST["sex"];
	$age=$_POST["age"];
	
	$dob=$_POST["dob"];
	
	$aadharno=$_POST["aadharno"];
	
	$cntno=$_POST["cntno"];
	$password=$_POST["password"];
	
	$addr=$_POST["addr"];
	$panchayath=$_POST["panchayath"];
	$descp=$_POST["descp"];
	
	$kbhn=$_POST["kbhn"];
	$frstry=$_POST["frstry"];
	
	
$sql = "update user set kbhn='$kbhn',frstry='$frstry',name='$name',sex='$sex',age='$age',dob='$dob',aadharno='$aadharno',cntno='$cntno',password='$password',addr='$addr',panchayath='$panchayath',descp='$descp' where Log_Id='$Log_Id'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../index.php");

?>						

