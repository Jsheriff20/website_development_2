<?php 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	include("../config.php");

//get infomation from register form
$username = $_POST['username'];
$user_password = $_POST['password'];
$password_hashed = password_hash($user_password, PASSWORD_DEFAULT); // password is hashed and salted.
$name = $_POST['name'];
$email = $_POST['email'];
$contact_number = $_POST['contact_number'];

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
	else if ($username_availability >= 1){
		header("location: register.php");
	}
	else { //inputs registration infomation into database

    $sql = "INSERT INTO basketball_teams_website_users (users_username, users_password, users_name, users_email, users_contact_number)
        VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "sql error";
    }
    else{
        mysqli_stmt_bind_param($stmt, "ssssi", $username, $password_hashed, $name, $email, $contact_number);
        mysqli_stmt_execute($stmt);
        header("Location: ../login/login.php");
    }
}
?>
