<?php
	//used to display errors when testing remove once ready to be published.
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	//include config details to connect to database
	include("../config.php");


	//function to get details realated to a specific team 
	function get_team_details($team_name, $what_to_get){

		//get details from config file to help us connect to the database
		include("../config.php");

		//varaible to return at the end
		$result_to_return;

		//get what ever details from what ever team has been chosen
		$sql = "SELECT $what_to_get FROM basketball_teams_website WHERE team_name = ? ;";
		$stmt = mysqli_stmt_init($conn);

		//if connection has failed output error
		if(!mysqli_stmt_prepare($stmt, $sql)){
			
			echo "sql Statment failed!";
		}
		else{

		// bind parameter to placeholders
			mysqli_stmt_bind_param($stmt, "s", $team_name);


		// run parameters inside of database
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			$row = mysqli_fetch_assoc($result);

			//assign result to return variable to retrived data
			$result_to_return = $row[$what_to_get];
		}

		//echo data where ever the function has been called
		echo $result_to_return;
	}
?>


<!DOCTYPE html>
<html lang="en">
		<head>
			<title color="white">Week 1</title>
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

				<h1 id= "PageTitle"> Week 1 </h1>
			</header>

			<?php
			include_once("../nav_bar.php");
			?>
		</head>


		<body class= "bg">

			<main class= "main_container" >

				<div class="card-deck">

					<div class="card">

						<img class="card-img-top" src="<?php get_team_details("Chicago Bulls", "image_link") ?>" alt="Card image">
						<div class="card-body text-center">

							<h4 class="card-title"><?php get_team_details("Chicago Bulls", "team_name") ?></h4>
							<p class="card-text"><?php get_team_details("Chicago Bulls", "team_description") ?></p>
						</div>
						<div class="card-footer text-center">
							<a href="#" class="btn btn-primary streched-link">link to more info about team</a><br>
							<a href="#" class="btn btn-primary streched-link">link to the </a>
						</div>
					</div>
				</div>
			</main>
		</body>
</html>
