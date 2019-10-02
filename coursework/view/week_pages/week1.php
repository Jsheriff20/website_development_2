<?php
	session_start();
	
	//include config details to connect to database
	include("../../model/config.php");


	//function to get details realated to a specific team 
	function get_static_card_details($teams_name, $what_to_get){

		//get details from config file to help us connect to the database
		include("../../model/config.php");



        $sql = "SELECT basketball_teams_website_items.teams_name, basketball_teams_website_items.teams_description,
        	basketball_teams_website_images.images_title, basketball_teams_website_images.images_path
            FROM basketball_teams_website_items
            INNER JOIN basketball_teams_website_images
            ON basketball_teams_website_items.images_logo_id=basketball_teams_website_images.teams_id and basketball_teams_website_items.teams_name = '$teams_name';";


        $result = $conn->query($sql);
        

        
        if ($result->num_rows > 0) {
								
			while($row = $result->fetch_assoc()) {

					echo $row[$what_to_get];
					break;
				}
			}
		else {

            echo "0 results";
		}

        $conn->close();
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

			<?php include_once("../nav_bars.php");
			get_nav_bar("one_file_in");?>
		</head>


		<body class= "bg">

			<main class= "main_container" >

				<div class="row" style="padding-bottom:50px;">
					<div class="col-sm-4">

						<div class="card border-dark">

						<div style="padding: 20px";>
							<img class="card-img-top" src="<?php get_static_card_details("New York Knicks", "images_path") ?>" alt="<?php get_static_card_details("New York Knicks", "images_title") ?>"> <!--Info taken from https://en.wikipedia.org/wiki/New_York_Knicks-->
						</div>
							<div class="card-body text-center">

								<h4 class="card-title"><?php get_static_card_details("New York Knicks", "teams_name") ?></h4>
								<p class="card-text"><?php get_static_card_details("New York Knicks", "teams_description") ?></p>
							</div>
						</div>
					</div>


					<div class="col-sm-4">
						<div class="card border-dark" >

						<div style="padding: 20px";>
							<img class="card-img-top" src="<?php get_static_card_details("Miami Heat", "images_path") ?>" alt="<?php get_static_card_details("Miami Heat", "images_title") ?>">
						</div>
							<div class="card-body text-center">

								<h4 class="card-title"><?php get_static_card_details("Miami Heat", "teams_name") ?></h4>
								<p class="card-text"><?php get_static_card_details("Miami Heat", "teams_description") ?></p>
							</div>
						</div>
					</div>
						

					<div class="col-sm-4">
						<div class="card border-dark" >

						<div style="padding: 20px";>
							<img class="card-img-top" src="<?php get_static_card_details("Los Angelese Lakers", "images_path") ?>" alt="<?php get_static_card_details("Los Angelese Lakers", "teams_name") ?>">
						</div>
							<div class="card-body text-center">

								<h4 class="card-title"><?php get_static_card_details("Los Angelese Lakers", "teams_name") ?></h4>
								<p class="card-text"><?php get_static_card_details("Los Angelese Lakers", "teams_description") ?></p>
							</div>
						</div>
					</div>
				</div>
					
				<div class="row" style="padding-bottom:50px;">	
					<div class="col-sm-4">
						<div class="card border-dark" >

						<div style="padding: 20px";>
							<img class="card-img-top" src="<?php get_static_card_details("Minnesota Timberwolves", "images_path") ?>" alt="<?php get_static_card_details("Minnesota Timberwolves", "teams_name") ?>">
						</div>
							<div class="card-body text-center">

								<h4 class="card-title"><?php get_static_card_details("Minnesota Timberwolves", "teams_name") ?></h4>
								<p class="card-text"><?php get_static_card_details("Minnesota Timberwolves", "teams_description") ?></p>
							</div>
						</div>
					</div>						

				
					<div class="col-sm-4">
						<div class="card border-dark" >

						<div style="padding: 20px";>
							<img class="card-img-top" src="<?php get_static_card_details("Oklahoma City Thunder", "images_path") ?>" alt="<?php get_static_card_details("Oklahoma City Thunder", "teams_name") ?>">
						</div>
							<div class="card-body text-center">

								<h4 class="card-title"><?php get_static_card_details("Oklahoma City Thunder", "teams_name") ?></h4>
								<p class="card-text"><?php get_static_card_details("Oklahoma City Thunder", "teams_description") ?></p>
							</div>
						</div>
					</div>
						

					<div class="col-sm-4">
						<div class="card border-dark" >

						<div style="padding: 20px";>
							<img class="card-img-top" src="<?php get_static_card_details("Houston Rockets", "images_path") ?>" alt="<?php get_static_card_details("Houston Rockets", "teams_name") ?>">
						</div>
							<div class="card-body text-center">

								<h4 class="card-title"><?php get_static_card_details("Houston Rockets", "teams_name") ?></h4>
								<p class="card-text"><?php get_static_card_details("Houston Rockets", "teams_description") ?></p>
							</div>
						</div>
					</div>
				</div>


				<div class="row" style="padding-bottom:50px;">
					<div class="col-sm-4">
						<div class="card border-dark" >

						<div style="padding: 20px";>
							<img class="card-img-top" src="<?php get_static_card_details("Golden State Warriors", "images_path") ?>" alt="<?php get_static_card_details("Golden State Warriors", "teams_name") ?>">
						</div>
							<div class="card-body text-center">

								<h4 class="card-title"><?php get_static_card_details("Golden State Warriors", "teams_name") ?></h4>
								<p class="card-text"><?php get_static_card_details("Golden State Warriors", "teams_description") ?></p>
							</div>
						</div>
					</div>
						

					<div class="col-sm-4">
						<div class="card border-dark" >

						<div style="padding: 20px";>
							<img class="card-img-top" src="<?php get_static_card_details("Cleveland Cavaliers", "images_path") ?>" alt="<?php get_static_card_details("Cleveland Cavaliers", "teams_name") ?>">
						</div>
							<div class="card-body text-center">

								<h4 class="card-title"><?php get_static_card_details("Cleveland Cavaliers", "teams_name") ?></h4>
								<p class="card-text"><?php get_static_card_details("Cleveland Cavaliers", "teams_description") ?></p>
							</div>
						</div>
					</div>
						

					<div class="col-sm-4">
						<div class="card border-dark" >

						<div style="padding: 20px";>
							<img class="card-img-top" src="<?php get_static_card_details("Chicago Bulls", "images_path") ?>" alt="<?php get_static_card_details("Chicago Bulls", "teams_name") ?>">
						</div>
							<div class="card-body text-center">

								<h4 class="card-title"><?php get_static_card_details("Chicago Bulls", "teams_name") ?></h4>
								<p class="card-text"><?php get_static_card_details("Chicago Bulls", "teams_description") ?></p>
							</div>
						</div>
					</div>
				</div>
						


				<div class="row" style="padding-bottom:50px;">
					<div class="col-sm-4">
						<div class="card border-dark" >

						<div style="padding: 20px">
							<img class="card-img-top" src="<?php get_static_card_details("Indiana Pacers", "images_path") ?>" alt="<?php get_static_card_details("Indiana Pacers", "teams_name") ?>">
						</div>
							<div class="card-body text-center">

								<h4 class="card-title"><?php get_static_card_details("Indiana Pacers", "teams_name") ?></h4>
								<p class="card-text"><?php get_static_card_details("Indiana Pacers", "teams_description") ?></p>
							</div>
						</div>
					</div>
						

					<div class="col-sm-4">
						<div class="card border-dark" >

						<div style="padding: 20px">
							<img class="card-img-top" src="<?php get_static_card_details("Toronto Raptors", "images_path") ?>" alt="<?php get_static_card_details("Toronto Raptors", "teams_name") ?>">
						</div>
							<div class="card-body text-center">

								<h4 class="card-title"><?php get_static_card_details("Toronto Raptors", "teams_name") ?></h4>
								<p class="card-text"><?php get_static_card_details("Toronto Raptors", "teams_description") ?></p>
							</div>
						</div>
					</div>	


					<div class="col-sm-4">
						<div class="card border-dark" >

						<div style="padding: 20px">
							<img class="card-img-top" src="<?php get_static_card_details("Utah Jazz", "images_path") ?>" alt="<?php get_static_card_details("Utah Jazz", "teams_name") ?>">
						</div>
							<div class="card-body text-center">

								<h4 class="card-title"><?php get_static_card_details("Utah Jazz", "teams_name") ?></h4>
								<p class="card-text"><?php get_static_card_details("Utah Jazz", "teams_description") ?></p>
							</div>
						</div>
					</div>
				</div>
			</main>
		</body>
</html>
