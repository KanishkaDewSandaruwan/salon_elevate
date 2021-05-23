<?php
	require_once 'connection.php'; //insert connection to page
	session_start();

	if(!isset($_SESSION['customer_id'])){
		echo "<script type=\"text/javascript\">window.location= \"login.php\";</script>";
	}
?>