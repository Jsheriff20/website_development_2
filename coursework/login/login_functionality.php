<?php
	session_start();

	include("../config.php");

	$username = $_POST['input_username'];
	$password = $_POST['input_password']; 
	
	//validate password entered and prevent any attempt 
	$username = stripcslashes($username);
	$username = htmlspecialchars($username);
	$password = stripcslashes($password);
	$password = htmlspecialchars($password);
	
	// created a template
	$sql = "SELECT * FROM basketball_teams_website_users WHERE users_username = ?;"; 
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		echo "sql Statment failed!";
	}
	else{
		// bind parameter to placeholders
		mysqli_stmt_bind_param($stmt, "s", $username);
		// run parameters inside of database
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		$row = mysqli_fetch_array($result);
		$stored_password = $row["users_password"];


		if (password_verify($password, $stored_password)){
			
			$password_verified = true;
		}
		else{

			$password_verified = false;
		}


		if ($row["users_username"] == $username && $password_verified == true){

			header("location: ../week_pages/week1.php");
			$_SESSION['logged_in'] = "1";
			$_SESSION['username'] = $username;
			
		}
		else {
			
			header("location: login.php");
		}
	}
?>