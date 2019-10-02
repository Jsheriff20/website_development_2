<?php

	function get_article_details($articles_id, $what_to_get){

		//get details from config file to help us connect to the database
		include("config.php");
		
	
		$sql = "SELECT basketball_teams_website_articles.articles_title, basketball_teams_website_articles.articles_text,
			basketball_teams_website_articles.articles_author, basketball_teams_website_articles.articles_id
			FROM basketball_teams_website_articles where basketball_teams_website_articles.articles_id = '$articles_id' ;";
		
	
	 	$result = $conn->query($sql);
			
	
	 	if ($result->num_rows > 0) {
									
	 		while($row = $result->fetch_assoc()) {
	
				$json = $row[$what_to_get];
	 		}
	 	}
	
	 	$conn->close();

	 	return json_encode($json);
	}


	function get_amount_of_comments($articles_id){
		
		//get details from config file to help us connect to the database
		include("config.php");
	
	
	
		$sql = "SELECT basketball_teams_website_articles.articles_title, basketball_teams_website_comments.comments_title,
				basketball_teams_website_articles.articles_id
			FROM basketball_teams_website_articles
			INNER JOIN basketball_teams_website_comments
			ON basketball_teams_website_articles.articles_id=basketball_teams_website_comments.articles_id 
			and basketball_teams_website_articles.articles_id = '$articles_id';";
	
	
		$result = $conn->query($sql);
			
	
		$number_of_comments = 0;
					
		if ($result->num_rows > 0) {
									
			while($row = $result->fetch_assoc()) {

				$number_of_comments++ ;
			}
		}
	
		$conn->close();

		if($number_of_comments == 1){

			return json_encode($number_of_comments . " Comment");
		}
		else{

			return json_encode($number_of_comments . " Comments");
		}
	}




	
	function get_article_images($articles_id){

		//get details from config file to help us connect to the database
		include("config.php");
	
	
	
		$sql = "SELECT basketball_teams_website_articles.articles_title, basketball_teams_website_images.images_title, 
			basketball_teams_website_images.images_path, basketball_teams_website_images.articles_id
			FROM basketball_teams_website_articles
			INNER JOIN basketball_teams_website_images
			ON basketball_teams_website_articles.articles_id=basketball_teams_website_images.articles_id
			and basketball_teams_website_articles.articles_id = '$articles_id';";
	
	
		$result = $conn->query($sql);
			
	
		$carousel_images_code = '<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">' . '<div class="carousel-inner">';
		$first_concatenate = true;
			
		if ($result->num_rows > 0) {
									
			while($row = $result->fetch_assoc()) {
	
				if($first_concatenate == true){

					$carousel_images_code .= '<div class="carousel-item active">' . '<img class="d-block w-100" src="' . $row["images_path"] . '" alt="' . $row["images_title"] .'">' . '</div>';
					$first_concatenate = false;
				}else{

				$carousel_images_code .= '<div class="carousel-item">' . '<img class="d-block w-100" src="' . $row["images_path"] . '" alt="' . $row["images_title"] .'">' . '</div>';
				}
			}
		}
	
		$conn->close();

		$carousel_images_code .= '</div>' . '</div>';

		return json_encode($carousel_images_code);
	}


	function get_article_comments($articles_id){

		//get details from config file to help us connect to the database
		include("config.php");
	
	
	
		$sql = "SELECT basketball_teams_website_articles.articles_title, basketball_teams_website_comments.comments_title, 
			basketball_teams_website_comments.comments_text, basketball_teams_website_articles.articles_id
			FROM basketball_teams_website_articles
			INNER JOIN basketball_teams_website_comments
			ON basketball_teams_website_articles.articles_id=basketball_teams_website_comments.articles_id
			and basketball_teams_website_articles.articles_id = '$articles_id';";
	
	
		$result = $conn->query($sql);
		$carousel_comments_code = "";
					
		if ($result->num_rows > 0) {
									
			while($row = $result->fetch_assoc()) {
	
				$carousel_comments_code = "";

				//creating card div
				$carousel_comments_code .= '<div class="card border-dark" style="width:100%; margin-bottom:20px" >';

					//concatenate the header for the card with the comment title
					$carousel_comments_code .= '<div class="card-header text-center">' . '<h4 class="card-title">' . $row["comments_title"] . '</h4>' .	'</div>';
						
					//concatenate the body for the card with the comment text
					$carousel_comments_code .= '<div class="card-body">' . '<p class="card-text">' . $row["comments_text"] . '</p>' . '</div>';
						
				// closing card div
				$carousel_comments_code .= '</div>';

				//build an array of comments in order of oldest to most recent
				$comments[] = $carousel_comments_code;
			}
		}
	
		$conn->close();

		
			//echo all the comments with displaying the most recent comment first
			return json_encode($comments);
	}

	function get_nav_bar(){
		
		$nav_bar = '<nav class= "navbar navbar-expand-md navbar-dark bg-dark">
            
		<div class="container">

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

				 <span class="navbar-toggler-icon"></span>
			</button>


			<div class="collapse navbar-collapse" id="navbarNavDropdown">

				<ul class="navbar-nav mr-auto">

					<li class="nav-item dropdown">

						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							
							Weeks
						</a>


						<div class="dropdown-menu" aria-labelledby="navbarDropdown">

							<a class="dropdown-item" href="../week_pages/week1.php">Week 1</a>
							<a class="dropdown-item" href="../week_pages/week2.php">Week 2</a>
							<a class="dropdown-item" href="../week_pages/week3.php">Week 3</a>
							<a class="dropdown-item" href="../week_pages/week4.php">Week 4</a>
							<a class="dropdown-item" href="../week_pages/week5.php">Week 5</a>
							<a class="dropdown-item" href="../week_pages/week6.php">Week 6</a>
							<a class="dropdown-item" href="../week_pages/week7.php">Week 7</a>
							<a class="dropdown-item" href="../week_pages/week8.php">Week 8</a>
							<a class="dropdown-item" href="../week_pages/week9.php">Week 9</a>
							<a class="dropdown-item" href="../week_pages/week10.php">Week 10</a>
							<a class="dropdown-item" href="../week_pages/week11.php">Week 11</a>
							<a class="dropdown-item" href="../week_pages/week12.php">Week 12</a>        
						</div>
					</li>


					<li class="nav-item">
						<a class="nav-link" href="../commentary.php">Commentary</a>
					</li>


					<!-- empty buttons to space out from logout button-->
					<li class="nav-item">
							<a class="nav-link" href="#"></a>
					</li>
					<li class="nav-item">
							<a class="nav-link" href="#"></a>
					</li>
					<li class="nav-item">
							<a class="nav-link" href="#"></a>
					</li>';
					
					if($_SESSION["logged_in"] == 1){

						$nav_bar .= '<li class="nav-item">
								<a class="nav-link" href="../logout.php">Log Out</a>
								</li>';
					}
					else{

						$nav_bar .=    '<li class="nav-item">
									<a class="nav-link" href="../login.php">Login</a>
								</li>
									
								<li class="nav-item">
									<a class="nav-link" href="../register.php">Register</a>
								</li>';
					}
				$nav_bar .= '</ul>                        
			</div>
		</div>
	</nav>';

			return json_encode($nav_bar);
	}


	function get_article($articles_id){

		session_start();
		$author_json = get_article_details($articles_id, "articles_author");
		$title_json = get_article_details($articles_id, "articles_title");
		$text_json = get_article_details($articles_id, "articles_text");
		$comments_number_json = get_amount_of_comments($articles_id);
		$image_slideshow_json = get_article_images($articles_id);
		$comments_json = get_article_comments($articles_id);
		$nav_bar_json = get_nav_bar();

		
		$author = json_decode($author_json);
		$title = json_decode($title_json);
		$text = json_decode($text_json);
		$comments_number = json_decode($comments_number_json);
		$image_slideshow = json_decode($image_slideshow_json);
		$comments = json_decode($comments_json);
		$nav_bar = json_decode($nav_bar_json);

		$article=  	'<head>' .

					'<title color="white">' . $title . '</title>' .

					'<header class="banner navbar-fixed-top">' . 
						
						'<section class= "top-right">' .
								
							'<img class= "banner_image" src= "../images/nba_logo.jpg" alt= "nba logo">' . 
						'</section>' .
			
						'<h3>' . $title . '</h3>' .
					'</header>' .
		
					$nav_bar . 
				'</head>' .
		
		
				'<body class= "bg">' .
		
					'<main class= "main_container" >' .
						'<div class="row">' .
							'<div class="col-lg-12">' .
		
								'<button type="button" class="btn btn-primary streched-link" onclick="history.back()">Back</button>' .
							'</div>' .
						'</div>' .
		
		
						'<div class="row">' .
		
							//this is where the article is displayed
							'<div class="col-lg-12">' .
		
								//row for article title and image slide show
								'<div class="row text-center" style="padding-bottom:50px; margin-left: 10%; margin-right: 10%;">' .
		
									'<div class="col">' .
		
										//title of the article
										'<h1>' . $title . '<h1>' .
		
		
										$image_slideshow .
									'</div>	' .					
								'</div>' .
								

								'<div class="row" style=" margin-left: 10%; margin-right: 10%;">' .	
		
									'<div class="col">' .
									
										$text .
									'</div>' .
								'</div>' .
		
		
								'<div class="row" style="padding-bottom:50px; margin-left: 10%; margin-right: 10%;">' .
		
									'<div class="col">' .

										'<h3> Wrote by ' . $author . '</h3>' .
									'</div>' .
								'</div>' .
		
		
								'<div class="row text-center" style="margin-left: 10%; margin-right: 10%;">' .
		
									'<div class="col">' .
		
										'<h2>"' . $comments_number . '"</h2>' .
		
										'<form name="add_comment" id="add_comment" action="../../controller/add_comment.php" onsubmit="return validate_comment()" method="post">' .
											
										'<table class="table">' .

												'<tbody>' .

													'<tr>' .

														'<th>Comment Title</th>' .
														'<td><input name="comments_title" id="comments_title" type="text" placeholder="add a title to your comment..."  required /> </td>' .
													'</tr>' .
		
													
													'<tr>' .

														'<th>Comment Text</th>' .
														'<td><input name="comments_text" id="comments_text" type="text" placeholder="add your comment..." required /> </td>' .
													'</tr>' .

		
													'<input type="hidden" name="articles_id" value="' . $articles_id . '"/>' .
													'<input type="hidden" name="session_login" value="'. $_SESSION["logged_in"] .'"/>' .
		
													'<tr>' .

														'<th>Post Comment </th>' .
														'<td><input type="submit" name="comment" value="Post" action="#"></td>' .
													'</tr>' .
												'</tbody>' .
											'</table>' .	
										'</form>' .
									'</div>' .
								'</div>' .
		
	
								'<div class="row" style="padding-bottom:10px; margin-left: 10%; margin-right: 10%;">' .
		
									'<div class="col">';

									for ($i=0 ; $i<sizeof($comments) ; $i++) {
										$article.= $comments[$i];
									}

									$article.= '</div>' .
								'</div>' .
							'</div>' .
						'</div>' .
					'</main>' .
				'</body>';

				return json_encode($article);
	}
?>