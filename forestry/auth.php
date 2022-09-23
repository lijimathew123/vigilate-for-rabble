<?php
session_start();
if(!isset($_SESSION['SESS_FORESTRY_ID']) || (trim($_SESSION['SESS_FORESTRY_ID']) == '')) {
	header("location:../");
	exit();
}

?>
