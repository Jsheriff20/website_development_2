<?php
	session_start();

	
	//include config details to connect to database
	include("../../model/config.php");


	function get_card_details($teams_name, $what_to_get){

		//get details from config file to help us connect to the database
		include("../../model/config.php");
	
	
		$sql = "SELECT basketball_teams_website_items.teams_name, basketball_teams_website_items.teams_description,
			basketball_teams_website_images.images_path, basketball_teams_website_images.images_title
			FROM basketball_teams_website_items
			INNER JOIN basketball_teams_website_images
			ON basketball_teams_website_items.teams_id = basketball_teams_website_images.teams_id and basketball_teams_website_items.teams_name = '$teams_name' ;";

	
	
		$result = $conn->query($sql);
	
		$carousel_images_code = "";
		$concatenate_num = 1;
			
		if ($result->num_rows > 0) {
								
			if($what_to_get == "slide_show"){

				while($row = $result->fetch_assoc()) {

					//dont display first image from table as this is the logo
					if($concatenate_num == 2){

						$carousel_images_code .= '<div class="card-img-top carousel-item active">' . '<img class="d-block w-100" src="'
							. $row["images_path"] . '" alt="' . $row["images_title"] .'">' . '</div>';
						$first_concatenate = false;
					}else if($concatenate_num > 2){

					$carousel_images_code .= '<div class="card-img-top carousel-item">' . '<img class="d-block w-100" src="' . $row["images_path"]
						. '" alt="' . $row["images_title"] .'">' . '</div>';
					}

					$concatenate_num++;						
				}

				echo $carousel_images_code;
			}
			else{

				while($row = $result->fetch_assoc()) {
		
					if($row["teams_name"] == $teams_name){
				
						echo $row[$what_to_get];	
						break;
					}
				}
			}
		}
		else {
	
			echo "0 results";
		}
	
		$conn->close();

		
	}

	
	function get_card_article_buttons($teams_name){

		//used to display errors when testing remove once ready to be published.
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
		
		//get details from config file to help us connect to the database
		include("../../model/config.php");
	
	
		$sql = "SELECT basketball_teams_website_items.teams_name, basketball_teams_website_articles_week2.articles_title,
		basketball_teams_website_articles_week2.articles_path, basketball_teams_website_sub_article_to_team.sub_teams_id,
		basketball_teams_website_sub_article_to_team.sub_articles_id
		FROM basketball_teams_website_items
		INNER JOIN basketball_teams_website_sub_article_to_team
		ON basketball_teams_website_items.teams_id = basketball_teams_website_sub_article_to_team.sub_teams_id
		INNER JOIN basketball_teams_website_articles_week2
		ON basketball_teams_website_articles_week2.articles_id = basketball_teams_website_sub_article_to_team.sub_articles_id 
		and basketball_teams_website_items.teams_name = '$teams_name';";
	
	
		$result = $conn->query($sql);
			
		if ($result->num_rows > 0) {

			while($row = $result->fetch_assoc()) {

				echo '<div class="card-footer text-center">' . '<a href="' . $row["articles_path"] . '" class="btn btn-primary streched-link">' . $row["articles_title"] . '</a><br>' . '</div>';
			}
		}
	
		$conn->close();
	}
?>


<!DOCTYPE html>
<html lang="en">
		<head>
			<title color="white">Week 2</title>


			<?php include_once("../link_include.php");?>
			

			<header class="banner navbar-fixed-top">
				
				<section class= "top-right">
					
					<img class= "banner_image" src= "../images/nba_logo.jpg" alt= "nba logo"> 
				</section>

				<h1 id= "page_title"> Week 2 </h1>
			</header>

			<?php include_once("../nav_bars.php");
			get_nav_bar("one_file_in");?>
		</head>


		<body class= "bg">

			<main class= "main_container" >

				<div class="row">

					<div class="col-sm-4"  style="padding-bottom:50px;">

						<div class="card border-dark" >

							<div style="padding: 20px">

								<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">

									<div class="carousel-inner">

										<?php get_card_details("New York Knicks", "slide_show")?>
									</div>
								</div>
							</div>


							<div class="card-body text-center">

								<h4 class="card-title"> <?php get_card_details("New York Knicks", "teams_name")?> </h4>
								<p class="card-text"> <?php get_card_details("New York Knicks", "teams_description")?> </p>
							</div>

							
							<?php get_card_article_buttons("New York Knicks") ?>
						</div>
					</div>



					<div class="col-sm-4"  style="padding-bottom:50px;">

						<div class="card border-dark" >

							<div style="padding: 20px">

								<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">

									<div class="carousel-inner">

										<?php get_card_details("Miami Heat", "slide_show")?>
									</div>
								</div>
							</div>

							
							<div class="card-body text-center">
								
								<h4 class="card-title"> <?php get_card_details("Miami Heat", "teams_name")?> </h4>
								<p class="card-text"> <?php get_card_details("Miami Heat", "teams_description")?> </p>
							</div>

							
							<?php get_card_article_buttons("Miami Heat") ?>
						</div>
					</div>

						

					<div class="col-sm-4"  style="padding-bottom:50px;">

						<div class="card border-dark" >

							<div style="padding: 20px">

								<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">

									<div class="carousel-inner">

										<?php get_card_details("Los Angelese Lakers", "slide_show")?>
									</div>
								</div>
							</div>

							
							<div class="card-body text-center">
								
								<h4 class="card-title"> <?php get_card_details("Los Angelese Lakers", "teams_name")?> </h4>
								<p class="card-text"> <?php get_card_details("Los Angelese Lakers", "teams_description")?> </p>
							</div>

							
							<?php get_card_article_buttons("Los Angelese Lakers") ?>
						</div>
					</div>
				</div>


					
				<div class="row" style="padding-bottom:50px;">	

					<div class="col-sm-4"  style="padding-bottom:50px;">

						<div class="card border-dark" >

							<div style="padding: 20px">

								<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">

									<div class="carousel-inner">

										<?php get_card_details("Minnesota Timberwolves", "slide_show")?>
									</div>
								</div>
							</div>

							
							<div class="card-body">
								
								<h4 class="card-title"> <?php get_card_details("Minnesota Timberwolves", "teams_name")?> </h4>
								<p class="card-text"> <?php get_card_details("Minnesota Timberwolves", "teams_description")?> </p>
							</div>

							
							<?php get_card_article_buttons("Minnesota Timberwolves") ?>
						</div>
					</div>						

				
					<div class="col-sm-4"  style="padding-bottom:50px;">

						<div class="card border-dark" >

							<div style="padding: 20px">

								<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">

									<div class="carousel-inner">

										<?php get_card_details("Oklahoma City Thunder", "slide_show")?>
									</div>
								</div>
							</div>

							
							<div class="card-body text-center">
								
								<h4 class="card-title"> <?php get_card_details("Oklahoma City Thunder", "teams_name")?> </h4>
								<p class="card-text"> <?php get_card_details("Oklahoma City Thunder", "teams_description")?> </p>
							</div>

							
							<?php get_card_article_buttons("Oklahoma City Thunder") ?>
						</div>
					</div>
						

					<div class="col-sm-4"  style="padding-bottom:50px;">

						<div class="card border-dark" >

							<div style="padding: 20px">

								<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">

									<div class="carousel-inner">

										<?php get_card_details("Houston Rockets", "slide_show")?>
									</div>
								</div>
							</div>

							
							<div class="card-body text-center">
								
								<h4 class="card-title"> <?php get_card_details("Houston Rockets", "teams_name")?> </h4>
								<p class="card-text"> <?php get_card_details("Houston Rockets", "teams_description")?> </p>
							</div>

							
							<?php get_card_article_buttons("Houston Rockets") ?>
						</div>
					</div>
				</div>


				<div class="row" style="padding-bottom:50px;">

					<div class="col-sm-4"  style="padding-bottom:50px;">

						<div class="card border-dark" >

							<div style="padding: 20px">

								<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">

									<div class="carousel-inner">

										<?php get_card_details("Golden State Warriors", "slide_show")?>
									</div>
								</div>
							</div>

							
							<div class="card-body text-center">
								
								<h4 class="card-title"> <?php get_card_details("Golden State Warriors", "teams_name")?> </h4>
								<p class="card-text"> <?php get_card_details("Golden State Warriors", "teams_description")?> </p>
							</div>

							
							<?php get_card_article_buttons("Golden State Warriors") ?>
						</div>
					</div>
						

					<div class="col-sm-4"  style="padding-bottom:50px;">

						<div class="card border-dark" >

							<div style="padding: 20px">

								<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">

									<div class="carousel-inner">

										<?php get_card_details("Cleveland Cavaliers", "slide_show")?>
									</div>
								</div>
							</div>

							
							<div class="card-body text-center">
								
								<h4 class="card-title"> <?php get_card_details("Cleveland Cavaliers", "teams_name")?> </h4>
								<p class="card-text"> <?php get_card_details("Cleveland Cavaliers", "teams_description")?> </p>
							</div>

							
							<?php get_card_article_buttons("Cleveland Cavaliers") ?>
						</div>
					</div>
						

					<div class="col-sm-4"  style="padding-bottom:50px;">

						<div class="card border-dark" >

							<div style="padding: 20px">

								<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">

									<div class="carousel-inner">

										<?php get_card_details("Chicago Bulls", "slide_show")?>
									</div>
								</div>
							</div>

							
							<div class="card-body text-center">
								
								<h4 class="card-title"> <?php get_card_details("Chicago Bulls", "teams_name")?> </h4>
								<p class="card-text"> <?php get_card_details("Chicago Bulls", "teams_description")?> </p>
							</div>

							
							<?php get_card_article_buttons("Chicago Bulls") ?>
						</div>
					</div>
				</div>
						


				<div class="row" style="padding-bottom:50px;">

					<div class="col-sm-4"  style="padding-bottom:50px;">

						<div class="card border-dark" >

							<div style="padding: 20px">

								<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">

									<div class="carousel-inner">

										<?php get_card_details("Indiana Pacers", "slide_show")?>
									</div>
								</div>
							</div>

							
							<div class="card-body text-center">
								
								<h4 class="card-title"> <?php get_card_details("Indiana Pacers", "teams_name")?> </h4>
								<p class="card-text"> <?php get_card_details("Indiana Pacers", "teams_description")?> </p>
							</div>

							
							<?php get_card_article_buttons("Indiana Pacers") ?>
						</div>
					</div>
						

					<div class="col-sm-4"  style="padding-bottom:50px;">

						<div class="card border-dark" >

							<div style="padding: 20px">

								<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">

									<div class="carousel-inner">

										<?php get_card_details("Toronto Raptors", "slide_show")?>
									</div>
								</div>
							</div>

							
							<div class="card-body text-center">
								
								<h4 class="card-title"> <?php get_card_details("Toronto Raptors", "teams_name")?> </h4>
								<p class="card-text"> <?php get_card_details("Toronto Raptors", "teams_description")?> </p>
							</div>

							
							<?php get_card_article_buttons("Toronto Raptors") ?>
						</div>
					</div>	


					<div class="col-sm-4"  style="padding-bottom:50px;">

						<div class="card border-dark" >

							<div style="padding: 20px">

								<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">

									<div class="carousel-inner">

										<?php get_card_details("Utah Jazz", "slide_show")?>
									</div>
								</div>
							</div>

							
							<div class="card-body text-center">
								
								<h4 class="card-title"> <?php get_card_details("Utah Jazz", "teams_name")?> </h4>
								<p class="card-text"> <?php get_card_details("Utah Jazz", "teams_description")?> </p>
							</div>

							
							<?php get_card_article_buttons("Utah Jazz") ?>
						</div>
					</div>
				</div>
			</main>
		</body>
</html>
