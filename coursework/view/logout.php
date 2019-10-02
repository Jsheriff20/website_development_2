<?php 
	session_start();
	
	if($_SESSION["logged_in"] == 1){
		unset($_SESSION["logged_in"]);
		session_destroy();
		header("location: login.php");
	}
	else{
		header("Location: " . $_SERVER["HTTP_REFERER"]);
	}
	exit();
?>