<?php 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	include("../../login/config.php");

	session_start();
	// if the user is already logged in this will run
	if ($_SESSION["loggedIn"] != "1" ){
		header("location: ../../login/Login1.html");
		exit();
	}
	
	//gets username from session
	$username = $_SESSION['username'];
	$sql = "SELECT * FROM Macklemore WHERE Username = ?;";
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
		$name = $row['Name'];
		$email = $row['Email'];
		$contactNumber = $row['ContactNumber'];
	}

?>
<!DOCTYPE html>
<html lang="en">
<main id="mainContainer">

<head>

	<title>Update Account</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="../../../jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../../../CSS.css">
	<script type="text/javascript" src="../../../script.js" ></script>


	<header id="Banner">
		<section class= "top-right">
			<img class="bannerImages" src="../../../Images/macklemoreUpdateAccountImage.jpg" alt="macklemoreImage" height="150px" width="230px"> <!--https://commons.wikimedia.org/wiki/File:20160324_Dortmund_Macklemore_Macklemore_0186.jpg-->
		</section>
		<h1> Update <br> Account </h1>
	</header>


	<nav class="navbar navbar-expand-md navbar-dark fixed-left">
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="mainNav">
				<div class="navbar-nav">
					<a class="nav-item nav-link" href="../../../index.php">Home</a>
					<a class="nav-item nav-link" href="../MyAccount.php">My Account</a>
					<a class="nav-item nav-link active" href="#">Update Account</a>
					<a class="nav-item nav-link" href="adminAccess/AdminAccess.php">Admin Access</a>
					<a class="nav-item nav-link" href="../../logout/logOut.php">Logout</a>
				</div>
			</div>
		</div>
	</nav>
	
</head>



<body>

	<section class="row">

		<section class="col-sm-2"> 
			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
		</section>

		<section class="col-sm-8"> 
			<form name="updateInfo" id="updateInfo" action="updateInfo.php" method="post">
				<table width="40px" class="table">
					<tbody>
						<tr>
							<th scope="row">Username</th>
							<td>
								<p id="echoUsername">
									<?php echo $username; ?>
								</p>
							</td>
						</tr>
						<tr>
							<th scope="row">Name</th>
							<td>
								<p id="echoName">
									<?php echo $name ?>
								</p>
							</td>
						</tr>
						<tr>
							<td>
								<input name="updateName" id="updateName" type="text" placeholder="New Name Here"/> 
							</td>
						</tr>
						<tr>
							<th scope="row">Email</th>
							<td>
								<p id="echoEmail">
									<?php echo $email ?>
								</p>
							</td>
						</tr>
						<tr>
							<td>
								<input name="updateEmail" id="updateEmail" type="email" placeholder="New Email Here"/>
							</td>
						</tr>
						<tr>
							<th scope="row">Contact Number</th>
							<td>
								<p id="echoNumber">
									<?php echo $contactNumber ?>
								</p>
							</td>
						</tr>
						<tr>
							<td>
								<input name="updateContactNumber" id="updateContactNumber" type="number" placeholder="New Number Here"/>
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<th>Update New Infomation </th>
							<td>
								<input type="submit" name="updateInfoSubmit" value="Update" action="../MyAccount.php">
							</td>
						</tr>
					</tfoot>					
				</table>
			</form>
		</section>

		<section class="col-sm-2">
			<article class="title"> </article>
			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
		</section>

	</section>

</body>

</main>

</html>
