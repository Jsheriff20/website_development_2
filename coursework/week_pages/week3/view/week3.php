<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


	session_start();
	// if the user is already logged in this will run
	if ($_SESSION["logged_in"] != "1" ){
		header("location: ../login/login.php");
		exit();
	}

	include_once("../model/card_functions.php");
	get_all_items();
?>


<!DOCTYPE html>
<html lang="en">

</html>
