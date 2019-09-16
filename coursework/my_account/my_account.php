<?php 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	include("../config.php");

	session_start();
	// if the user is already logged in this will run
	if ($_SESSION["logged_in"] != "1" ){
		header("location: ../login/login.php");
		exit();
	}
	
	//gets username from session
	$username = $_SESSION['username'];
	$sql = "SELECT * FROM basketball_teams_website_user_details WHERE username = ? ;";
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
		$name = $row['name'];
		$email = $row['email'];
		$contact_number = $row['contact_number'];
	}
?>


<!DOCTYPE html>
<html lang="en">
		<head>
			<title color="white">My Account</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
			<script src="jquery-3.3.1.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
			<link rel="stylesheet" type="text/css" href="../CSS.css">
			<script type="text/javascript" src="../script.js" ></script>
			

			<header class="banner navbar-fixed-top">
				
				<section class= "top-right">
					<img class= "banner_image" src= "../images/nba_logo.jpg" alt= "nba logo"> 
				</section>

				<h1 id= "page_title"> My Account </h1>
			</header>

			<?php

				include_once("../nav_bar.html");
			?>
		</head>


		<body class= "bg">

			<main class= "main_container" >

				<div class="row" style="padding-bottom:50px;">
					<div class="col-sm-12">
						<table class="table">
							<tbody>
								<tr>
									<th scope="row">Username</th>
									<td>
										<p id="echo_username">
											<?php echo $username; ?>
										</p>
									</td>
								</tr>
								<tr>
									<th scope="row">Name</th>
									<td>
										<p id="echo_name">
											<?php echo $name ?>
										</p>
									</td>
								</tr>
								<tr>
									<th scope="row">Email</th>
									<td>
										<p id="echo_email">
											<?php echo $email ?>
										</p>
									</td>
								</tr>
								<tr>
									<th scope="row">Contact Number</th>
									<td>
										<p id="echo_number">
											<?php echo $contact_number ?>
										</p>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</main>
		</body>
</html>

