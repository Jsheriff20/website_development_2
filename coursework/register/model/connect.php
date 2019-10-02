<?php 

function regsiter_user($username, $password_hashed, $first_name, $surname, $email, $contact_number){

	include("../../config.php");

	// this will check to see if the username is already in use

	$sql = "SELECT * FROM basketball_teams_website_users WHERE users_username = ?;";
	$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			echo "sql Statment failed!";
		}
		else{
			// bind parameter to placeholders
			mysqli_stmt_bind_param($stmt, "s", $user_name);
			// run parameters inside of database
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			$row = mysqli_fetch_array($result);
			$username_availability = $row["users_id"];
		}
		//check if user has already gotten that username
		if ($username_availability >= 1){
			header("location: ../view/register.php");
		}
		else { //inputs registration infomation into database

		$sql = "INSERT INTO basketball_teams_website_users (users_username, users_password, users_first_name, users_surname, users_email, users_contact_number)
			VALUES (?, ?, ?, ?, ?, ?);";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			echo "sql error";
		}
		else{
			mysqli_stmt_bind_param($stmt, "sssssi", $username, $password_hashed, $first_name, $surname, $email, $contact_number);
			mysqli_stmt_execute($stmt);
			header("Location: ../../view/login/login.php");
		}
	}
}
?>
