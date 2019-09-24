<?php

	//used to display errors when testing remove once ready to be published.
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

			
    function get_article_details($articles_title, $what_to_get){


		//get details from connect file to help us connect to the database
		include("connect.php");
		
	
		$sql = "SELECT basketball_teams_website_articles.articles_title, basketball_teams_website_articles.articles_text,
			basketball_teams_website_articles.articles_author
			FROM basketball_teams_website_articles;";
		
	
	 	$result = $conn->query($sql);
			
				
		$json;

	 	if ($result->num_rows > 0) {
									
	 		while($row = $result->fetch_assoc()) {
	
	 			if($row["articles_title"] == $articles_title){
	
					$json = $row[$what_to_get];
				}
	 		}
	 	}
	
	 	$conn->close();

	 	return json_encode($json);
	}


	function get_amount_of_comments($articles_title){
		
		//get details from connect file to help us connect to the database
		include("connect.php");
	
	
	
		$sql = "SELECT basketball_teams_website_articles.articles_title, basketball_teams_website_comments.comments_title
			FROM basketball_teams_website_articles
			INNER JOIN basketball_teams_website_comments
			ON basketball_teams_website_articles.articles_id=basketball_teams_website_comments.articles_id;";
	
	
		$result = $conn->query($sql);
			
	
		$number_of_comments = 0;
					
		if ($result->num_rows > 0) {
									
			while($row = $result->fetch_assoc()) {
	
				if($row["articles_title"] == $articles_title){

					$number_of_comments++ ;
				}
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




	
	function get_article_images($articles_title){

		//get details from connect file to help us connect to the database
		include("connect.php");
	
	
	
		$sql = "SELECT basketball_teams_website_articles.articles_title, basketball_teams_website_images.images_title, 
			basketball_teams_website_images.images_path
			FROM basketball_teams_website_articles
			INNER JOIN basketball_teams_website_images
			ON basketball_teams_website_articles.articles_id=basketball_teams_website_images.articles_id;";
	
	
		$result = $conn->query($sql);
			
	
		$carousel_images_code = '<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">' . '<div class="carousel-inner">';
		$first_concatenate = true;
			
		if ($result->num_rows > 0) {
									
			while($row = $result->fetch_assoc()) {
	
				if($row["articles_title"] == $articles_title){
	
					if($first_concatenate == true){

						$carousel_images_code .= '<div class="carousel-item active">' . '<img class="d-block w-100" src="' . "../../../" . $row["images_path"] . '" alt="' . $row["images_title"] .'">' . '</div>';
						$first_concatenate = false;
					}else{

					$carousel_images_code .= '<div class="carousel-item">' . '<img class="d-block w-100" src="' . "../../../" . $row["images_path"] . '" alt="' . $row["images_title"] .'">' . '</div>';
					}
				}
			}
		}
		else {
	
			echo "0 results";
		}
	
		$conn->close();

		$carousel_images_code .= '</div>' . '</div>';

		return json_encode($carousel_images_code);
	}


	// function get_article_comments($articles_title){

	// 	//get details from connect file to help us connect to the database
	// 	include("connect.php");
	
	
	
	// 	$sql = "SELECT basketball_teams_website_articles.articles_title, basketball_teams_website_comments.comments_title, 
	// 		basketball_teams_website_comments.comments_text
	// 		FROM basketball_teams_website_articles
	// 		INNER JOIN basketball_teams_website_comments
	// 		ON basketball_teams_website_articles.articles_id=basketball_teams_website_comments.articles_id;";
	
	
	// 	$result = $conn->query($sql);
	// 	$carousel_comments_code = "";
					
	// 	if ($result->num_rows > 0) {
									
	// 		while($row = $result->fetch_assoc()) {
	
	// 			if($row["articles_title"] == $articles_title){
	// 				$carousel_comments_code = "";

	// 				//creating card div
	// 				$carousel_comments_code .= '<div class="card border-dark" style="width:100%; margin-bottom:20px" >';

	// 					//concatenate the header for the card with the comment title
	// 					$carousel_comments_code .= '<div class="card-header text-center">' . '<h4 class="card-title">' . $row["comments_title"] . '</h4>' .	'</div>';
						
	// 					//concatenate the body for the card with the comment text
	// 					$carousel_comments_code .= '<div class="card-body text-center">' . '<p class="card-text">' . $row["comments_text"] . '</p>' . '</div>';
						
	// 					//concatenate the delete button if the user created the comment
	// 					$carousel_comments_code .= '<div class="card-footer text-center">' . '<a href="#" class="btn btn-primary streched-link">Delete (only display if the user created the card)</a><br>' . '</div>';
					
	// 				// closing card div
	// 				$carousel_comments_code .= '</div>';
	// 			}

	// 			//build an array of comments in order of oldest to most recent
	// 			$comments[] = $carousel_comments_code;
	// 		}

	// 		//reverse the array so the most reccent comment is now at the start of the array
	// 		$comments = array_reverse($comments ,true);


	// 		//echo all the comments with displaying the most recent comment first
	// 		foreach($comments as $comments){

	// 			echo $comments;
	// 		}
	// 	}
	
	// 	$conn->close();
	// }


	function get_article($article_title){

		$author_json = get_article_details($article_title, "articles_author");
		$title_json = get_article_details($article_title, "articles_title");
		$text_json = get_article_details($article_title, "articles_text");
		$comments_number_json = get_amount_of_comments($article_title);
		$image_slideshow_json = get_article_images($article_title);

		
		$author = json_decode($author_json);
		$title = json_decode($title_json);
		$text = json_decode($text_json);
		$comments_number = json_decode($comments_number_json);
		$image_slideshow = json_decode($image_slideshow_json);


		echo $author;
		echo $title;
		echo $text;
		echo $comments_number;
		echo $image_slideshow;

		// display title
		// dispaly slideshow
		// display text
		// dispaly author
		// display comments amount
		// display comments

		
	}
?>