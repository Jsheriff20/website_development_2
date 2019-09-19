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

	
	function get_article_info($article_title){
    
        include("../config.php");
    
        $sql = "SELECT basketball_teams_website_articles.articles_title, basketball_teams_website_articles.articles_text,
            basketball_teams_website_articles.articles_author, basketball_teams_website_images.images_title, 
            basketball_teams_website_images.images_path
            FROM basketball_teams_website_articles
            INNER JOIN basketball_teams_website_images
            ON basketball_teams_website_articles.articles_id=basketball_teams_website_images.articles_id;";


        $result = $conn->query($sql);
        

        $output_article = 0;

        if ($result->num_rows > 0) {

            // output relevent data
            while($row = $result->fetch_assoc()) {

                if($row["articles_title"] == $article_title){

                    echo $row["images_title"];
                    echo "<br>";
                    echo $row["images_path"];
                    echo "<br><br>";
                }
            }
            
                  
            //trying to only let this display once
            ($row = $result->fetch_assoc()) {

                if($row["articles_title"] == $article_title){

                    echo $row["articles_title"];
                    echo $row["articles_text"];
                    echo $row["articles_author"];
                }


                $output_article = 1;
            }
            
        
        } else {

            echo "0 results";
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

			<?php include_once("../nav_bar.html");?>
		</head>


		<body class= "bg">

			<main class= "main_container" >

				<div class="row">

					<!-- list of buttons with team name, clicking on a team button will change what the article is about -->
					<div class="col-sm-3">

						<div class="btn-group-vertical ">
							<button type="button" class="btn btn-secondary navbar-dark bg-dark">1</button>
							<button type="button" class="btn btn-secondary navbar-dark bg-dark">2</button>
							<button type="button" class="btn btn-secondary navbar-dark bg-dark">3</button>
							<button type="button" class="btn btn-secondary navbar-dark bg-dark">4</button>
							<button type="button" class="btn btn-secondary navbar-dark bg-dark">5</button>
							<button type="button" class="btn btn-secondary navbar-dark bg-dark">6</button>
							<button type="button" class="btn btn-secondary navbar-dark bg-dark">7</button>
							<button type="button" class="btn btn-secondary navbar-dark bg-dark">8</button>
							<button type="button" class="btn btn-secondary navbar-dark bg-dark">9</button>
							<button type="button" class="btn btn-secondary navbar-dark bg-dark">10</button>
							<button type="button" class="btn btn-secondary navbar-dark bg-dark">11</button>
							<button type="button" class="btn btn-secondary navbar-dark bg-dark">12</button>
						</div>
					</div>


					<!-- this is where the article is displayed -->
					<div class="col-lg-9 text-center">

						<!-- row for article title and image slide show-->
						<div class="row" style="padding-bottom:50px;">

							<div class="col">

                            <?php get_article_info("About New York knicks") ?>
								<h1> Title example <h1>

								<div class="med-gap"></div>
								<!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
										<div class="carousel-item active">
										<img class="d-block w-100" src="..." alt="First slide">
										</div>
										<div class="carousel-item">
										<img class="d-block w-100" src="..." alt="Second slide">
										</div>
										<div class="carousel-item">
										<img class="d-block w-100" src="..." alt="Third slide">
										</div>
									</div>
									<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div> -->
							</div>						
						</div>
							

						<!--row for article text-->
						<div class="row" style="padding-bottom:50px;">	

							<div class="col">
							
							</div>
						</div>


						<!--row for author text-->
						<div class="row" style="padding-bottom:50px;">

							<div class="col">
							<h3> Wrote by author '<!--add authors name -->' </h3> 

							</div>
						</div>


						<!--row for user to create a comment-->
						<div class="row" style="padding-bottom:50px;">

							<div class="col">
							
							</div>
						</div>


						<!--row for comments-->
						<div class="row" style="padding-bottom:50px; margin-left: 10%; margin-right: 10%;">	

						<!-- every time a comment is found relating to a article then there will be a php loop that echoes them out liek this example -->
						<?php for($i = 0; 10 > $i; $i++){echo '
							<div class="card border-dark" style="width:100%; margin-bottom:60px" >

								<div class="card-header text-center">

									<h4 class="card-title">"users_name - title_of_comment eg. Johnny - Best article ive ever read"</h4>
								</div>


								<div class="card-body text-center">

									<p class="card-text">"text_for_comment eg. yes best article ever this is the msot example examples of all examples if this example was an example then EXAMPLE!"</p>
								</div>


								<div class="card-footer text-center">

									<a href="week10.php" class="btn btn-primary streched-link">Delete (only display if the user created the card)</a><br>
								</div>
							</div>
						
							';}?>
						</div>
					</div>
				</div>
			</main>
		</body>
</html>
