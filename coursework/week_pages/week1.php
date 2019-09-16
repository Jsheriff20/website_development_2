<?php
	session_start();
	// if the user is already logged in this will run
	if ($_SESSION["logged_in"] != "1" ){
		header("location: ../login/login.php");
		exit();
	}


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


			<?php include_once("../link_include.php");?>
			

			<header class="banner navbar-fixed-top">
				
				<section class= "top-right">
					
					<img class= "banner_image" src= "../images/nba_logo.jpg" alt= "nba logo"> 
				</section>

				<h1 id= "page_title"> Week 1 </h1>
			</header>

			<?php include_once("../nav_bar.html");?>
		</head>


		<body class= "bg">

			<main class= "main_container" >

				<div class="row" style="padding-bottom:50px;">
					<div class="col-sm-4">

						<div class="card" style="width: 18rem;">

						<div style="padding: 20px";>
							<img class="card-img-top" src="<?php get_team_details("New York Knicks", "image_link") ?>" alt="<?php get_team_details("New York Knicks", "team_name") ?>"> <!--Info taken from https://en.wikipedia.org/wiki/New_York_Knicks-->
						</div>
							<div class="card-body text-center">

								<h4 class="card-title"><?php get_team_details("New York Knicks", "team_name") ?></h4>
								<p class="card-text"><?php get_team_details("New York Knicks", "team_description") ?></p>
							</div>
							<div class="card-footer text-center">
								<a href="week1.php" class="btn btn-primary streched-link">About <?php get_team_details("New York Knicks", "team_name") ?></a><br>
								<a href="week1.php" class="btn btn-primary streched-link">Week 1 Commentary</a>
							</div>
						</div>
					</div>


					<div class="col-sm-4">
						<div class="card" style="width: 18rem;">

						<div style="padding: 20px";>
							<img class="card-img-top" src="<?php get_team_details("Miami Heat", "image_link") ?>" alt="<?php get_team_details("Miami Heat", "team_name") ?>">
						</div>
							<div class="card-body text-center">

								<h4 class="card-title"><?php get_team_details("Miami Heat", "team_name") ?></h4>
								<p class="card-text"><?php get_team_details("Miami Heat", "team_description") ?></p>
							</div>
							<div class="card-footer text-center">
								<a href="week2.php" class="btn btn-primary streched-link">About <?php get_team_details("Miami Heat", "team_name") ?></a><br>
								<a href="week2.php" class="btn btn-primary streched-link">Week 2 Commentary</a>
							</div>
						</div>
					</div>
						

					<div class="col-sm-4">
						<div class="card" style="width: 18rem;">

						<div style="padding: 20px";>
							<img class="card-img-top" src="<?php get_team_details("Los Angelese Lakers", "image_link") ?>" alt="<?php get_team_details("Los Angelese Lakers", "team_name") ?>">
						</div>
							<div class="card-body text-center">

								<h4 class="card-title"><?php get_team_details("Los Angelese Lakers", "team_name") ?></h4>
								<p class="card-text"><?php get_team_details("Los Angelese Lakers", "team_description") ?></p>
							</div>
							<div class="card-footer text-center">
								<a href="week3.php" class="btn btn-primary streched-link">About <?php get_team_details("Los Angelese Lakers", "team_name") ?></a><br>
								<a href="week3.php" class="btn btn-primary streched-link">Week 3 Commentary</a>
							</div>
						</div>
					</div>
				</div>
					
				<div class="row" style="padding-bottom:50px;">	
					<div class="col-sm-4">
						<div class="card" style="width: 18rem;">

						<div style="padding: 20px";>
							<img class="card-img-top" src="<?php get_team_details("Minnesota Timberwolves", "image_link") ?>" alt="<?php get_team_details("Minnesota Timberwolves", "team_name") ?>">
						</div>
							<div class="card-body text-center">

								<h4 class="card-title"><?php get_team_details("Minnesota Timberwolves", "team_name") ?></h4>
								<p class="card-text"><?php get_team_details("Minnesota Timberwolves", "team_description") ?></p>
							</div>
							<div class="card-footer text-center">
								<a href="week4.php" class="btn btn-primary streched-link">About <?php get_team_details("Minnesota Timberwolves", "team_name") ?></a><br>
								<a href="week4.php" class="btn btn-primary streched-link">Week 4 Commentary</a>
							</div>
						</div>
					</div>						

				
					<div class="col-sm-4">
						<div class="card" style="width: 18rem;">

						<div style="padding: 20px";>
							<img class="card-img-top" src="<?php get_team_details("Oklahoma City Thunder", "image_link") ?>" alt="<?php get_team_details("Oklahoma City Thunder", "team_name") ?>">
						</div>
							<div class="card-body text-center">

								<h4 class="card-title"><?php get_team_details("Oklahoma City Thunder", "team_name") ?></h4>
								<p class="card-text"><?php get_team_details("Oklahoma City Thunder", "team_description") ?></p>
							</div>
							<div class="card-footer text-center">
								<a href="week5.php" class="btn btn-primary streched-link">About <?php get_team_details("Oklahoma City Thunder", "team_name") ?></a><br>
								<a href="week5.php" class="btn btn-primary streched-link">Week 5 Commentary</a>
							</div>
						</div>
					</div>
						

					<div class="col-sm-4">
						<div class="card" style="width: 18rem;">

						<div style="padding: 20px";>
							<img class="card-img-top" src="<?php get_team_details("Houston Rockets", "image_link") ?>" alt="<?php get_team_details("Houston Rockets", "team_name") ?>">
						</div>
							<div class="card-body text-center">

								<h4 class="card-title"><?php get_team_details("Houston Rockets", "team_name") ?></h4>
								<p class="card-text"><?php get_team_details("Houston Rockets", "team_description") ?></p>
							</div>
							<div class="card-footer text-center">
								<a href="week6.php" class="btn btn-primary streched-link">About <?php get_team_details("Houston Rockets", "team_name") ?></a><br>
								<a href="week6.php" class="btn btn-primary streched-link">Week 6 Commentary</a>
							</div>
						</div>
					</div>
				</div>


				<div class="row" style="padding-bottom:50px;">
					<div class="col-sm-4">
						<div class="card" style="width: 18rem;">

						<div style="padding: 20px";>
							<img class="card-img-top" src="<?php get_team_details("Golden State Warriors", "image_link") ?>" alt="<?php get_team_details("Golden State Warriors", "team_name") ?>">
						</div>
							<div class="card-body text-center">

								<h4 class="card-title"><?php get_team_details("Golden State Warriors", "team_name") ?></h4>
								<p class="card-text"><?php get_team_details("Golden State Warriors", "team_description") ?></p>
							</div>
							<div class="card-footer text-center">
								<a href="week7.php" class="btn btn-primary streched-link">About <?php get_team_details("Golden State Warriors", "team_name") ?></a><br>
								<a href="week7.php" class="btn btn-primary streched-link">Week 7 Commentary</a>
							</div>
						</div>
					</div>
						

					<div class="col-sm-4">
						<div class="card" style="width: 18rem;">

						<div style="padding: 20px";>
							<img class="card-img-top" src="<?php get_team_details("Cleveland Cavaliers", "image_link") ?>" alt="<?php get_team_details("Cleveland Cavaliers", "team_name") ?>">
						</div>
							<div class="card-body text-center">

								<h4 class="card-title"><?php get_team_details("Cleveland Cavaliers", "team_name") ?></h4>
								<p class="card-text"><?php get_team_details("Cleveland Cavaliers", "team_description") ?></p>
							</div>
							<div class="card-footer text-center">
								<a href="week8.php" class="btn btn-primary streched-link">About <?php get_team_details("Cleveland Cavaliers", "team_name") ?></a><br>
								<a href="week8.php" class="btn btn-primary streched-link">Week 8 Commentary</a>
							</div>
						</div>
					</div>
						

					<div class="col-sm-4">
						<div class="card" style="width: 18rem;">

						<div style="padding: 20px";>
							<img class="card-img-top" src="<?php get_team_details("Chicago Bulls", "image_link") ?>" alt="<?php get_team_details("Chicago Bulls", "team_name") ?>">
						</div>
							<div class="card-body text-center">

								<h4 class="card-title"><?php get_team_details("Chicago Bulls", "team_name") ?></h4>
								<p class="card-text"><?php get_team_details("Chicago Bulls", "team_description") ?></p>
							</div>
							<div class="card-footer text-center">
								<a href="week9.php" class="btn btn-primary streched-link">About <?php get_team_details("Chicago Bulls", "team_name") ?></a><br>
								<a href="week9.php" class="btn btn-primary streched-link">Week 9 Commentary</a>
							</div>
						</div>
					</div>
				</div>
						


				<div class="row" style="padding-bottom:50px;">
					<div class="col-sm-4">
						<div class="card" style="width: 18rem;">

						<div style="padding: 20px">
							<img class="card-img-top" src="<?php get_team_details("Indiana Pacers", "image_link") ?>" alt="<?php get_team_details("Indiana Pacers", "team_name") ?>">
						</div>
							<div class="card-body text-center">

								<h4 class="card-title"><?php get_team_details("Indiana Pacers", "team_name") ?></h4>
								<p class="card-text"><?php get_team_details("Indiana Pacers", "team_description") ?></p>
							</div>
							<div class="card-footer text-center">
								<a href="week10.php" class="btn btn-primary streched-link">About <?php get_team_details("Indiana Pacers", "team_name") ?></a><br>
								<a href="week10.php" class="btn btn-primary streched-link">Week 10 Commentary</a>
							</div>
						</div>
					</div>
						

					<div class="col-sm-4">
						<div class="card" style="width: 18rem;">

							<img class="card-img-top" src="<?php get_team_details("Toronto Raptors", "image_link") ?>" alt="<?php get_team_details("Toronto Raptors", "team_name") ?>">
							<div class="card-body text-center">

								<h4 class="card-title"><?php get_team_details("Toronto Raptors", "team_name") ?></h4>
								<p class="card-text"><?php get_team_details("Toronto Raptors", "team_description") ?></p>
							</div>
							<div class="card-footer text-center">
								<a href="week11.php" class="btn btn-primary streched-link">About <?php get_team_details("Toronto Raptors", "team_name") ?></a><br>
								<a href="week11.php" class="btn btn-primary streched-link">Week 11 Commentary</a>
							</div>
						</div>
					</div>	


					<div class="col-sm-4">
						<div class="card" style="width: 18rem;">

						<div style="padding: 20px">
							<img class="card-img-top" src="<?php get_team_details("Utah Jazz", "image_link") ?>" alt="<?php get_team_details("Utah Jazz", "team_name") ?>">
						</div>
							<div class="card-body text-center">

								<h4 class="card-title"><?php get_team_details("Utah Jazz", "team_name") ?></h4>
								<p class="card-text"><?php get_team_details("Utah Jazz", "team_description") ?></p>
							</div>
							<div class="card-footer text-center">
								<a href="week12.php" class="btn btn-primary streched-link">About <?php get_team_details("Utah Jazz", "team_name") ?></a><br>
								<a href="week12.php" class="btn btn-primary streched-link">Week 12 Commentary</a>
							</div>
						</div>
					</div>
				</div>
			</main>
		</body>
</html>
