<?php 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	include("../../login/config.php");
	
	session_start();
	//gets username from session
	$username = $_SESSION['username'];
	$name = $_POST['updateName'];
	$email = $_POST['updateEmail'];
	$contactNumber = $_POST['updateContactNumber'];
	
	
	
	// this will prevent against sql injection
	$name = stripcslashes($name);
	$name = htmlspecialchars($name);
	$email = stripcslashes($email);
	$email = htmlspecialchars($email);
	$contactNumber = stripcslashes($contactNumber);
	$contactNumber = htmlspecialchars($contactNumber);
	
	// checks lenght of inputs
	$nameLength = strlen($name);
	$emailLength = strlen($email);
	$contactNumberLength = strlen($contactNumber);
	
	//checks to see if anything has been inputed
	if ($nameLength > 0){
		$sql = "UPDATE Macklemore SET Name= ? WHERE Username = ?";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			echo "sql error";
		}
		else{
			mysqli_stmt_bind_param($stmt, "ss", $name, $username);
			mysqli_stmt_execute($stmt);
		}
	}

	if ($emailLength > 0){
		$sql = "UPDATE Macklemore SET Email= ? WHERE Username = ?";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			echo "sql error";
		}
		else{
			mysqli_stmt_bind_param($stmt, "ss", $email, $username);
			mysqli_stmt_execute($stmt);
		}
	}
	
	if ($contactNumberLength > 0){
		$sql = "UPDATE Macklemore SET ContactNumber= ? WHERE Username = ?";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			echo "sql error";
		}
		else{
			mysqli_stmt_bind_param($stmt, "is", $contactNumber, $username);
			mysqli_stmt_execute($stmt);
		}
	}
	if($nameLength != 0 || $emailLength != 0 || $contactNumberLength != 0){
		// information entered so go to my account page
		header("location: ../MyAccount.php");
	}
	else
		header("location: UpdateAccount.php")
	
?>