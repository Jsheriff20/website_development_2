<?php
	session_start();
	// if the user is already logged in this will run
	if ($_SESSION["logged_in"] != "1" ){
		header("location: ../login/login.php");
		exit();
	}
?>


<!DOCTYPE html>
<html lang="en">
		<head>
			<title color="white">Week 3</title>


			<?php include_once("../link_include.php");?>
			

			<header class="banner navbar-fixed-top">
				
				<section class= "top-right">
					
					<img class= "banner_image" src= "../../../images/nba_logo.jpg" alt= "nba logo"> 
				</section>

				<h1 id= "page_title"> Week 3 </h1>
			</header>

			<?php include_once("../nav_bar.html");?>
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
