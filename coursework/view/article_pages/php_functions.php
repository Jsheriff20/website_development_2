<?php
	session_start();

			
    function get_article_details($articles_title, $what_to_get){

		//get details from config file to help us connect to the database
		include("../../model/config.php");
		
	
		$sql = "SELECT basketball_teams_website_articles_week2.articles_title, basketball_teams_website_articles_week2.articles_text,
			basketball_teams_website_articles_week2.articles_author
			FROM basketball_teams_website_articles_week2
			INNER JOIN basketball_teams_website_images
			WHERE basketball_teams_website_articles_week2.articles_id=basketball_teams_website_images.articles_id;";
		
	
		$result = $conn->query($sql);
			
				
		if ($result->num_rows > 0) {
									
			while($row = $result->fetch_assoc()) {
	
				if($row["articles_title"] == $articles_title){
	
					echo $row[$what_to_get];
					break;
				}
			}
		}
		else {
	
			echo "0 results";
		}
	
		$conn->close();
	}


	function get_article_images($articles_title){

		//get details from config file to help us connect to the database
		include("../../model/config.php");
	
	
	
		$sql = "SELECT basketball_teams_website_articles_week2.articles_title, basketball_teams_website_images.images_title, 
			basketball_teams_website_images.images_path
			FROM basketball_teams_website_articles_week2
			INNER JOIN basketball_teams_website_images
			ON basketball_teams_website_articles_week2.articles_id=basketball_teams_website_images.articles_id;";
	
	
		$result = $conn->query($sql);
			
	
		$carousel_images_code = "";
		$first_concatenate = true;
			
		if ($result->num_rows > 0) {
									
			while($row = $result->fetch_assoc()) {
	
				if($row["articles_title"] == $articles_title){
	
					if($first_concatenate == true){

						$carousel_images_code .= '<div class="carousel-item active">' . '<img class="d-block w-100" src="' . $row["images_path"] . '" alt="' . $row["images_title"] .'">' . '</div>';
						$first_concatenate = false;
					}else{

					$carousel_images_code .= '<div class="carousel-item">' . '<img class="d-block w-100" src="' . $row["images_path"] . '" alt="' . $row["images_title"] .'">' . '</div>';
					}
				}
			}
		}
		else {
	
			echo "0 results";
		}
	
		$conn->close();

		echo $carousel_images_code;
	}


	function get_article_comments($articles_title){

		//get details from config file to help us connect to the database
		include("../../model/config.php");
	
	
		$sql = "SELECT basketball_teams_website_articles_week2.articles_title, basketball_teams_website_comments.comments_title, 
			basketball_teams_website_comments.comments_text
			FROM basketball_teams_website_articles_week2
			INNER JOIN basketball_teams_website_comments
			ON basketball_teams_website_articles_week2.articles_id=basketball_teams_website_comments.articles_id
			Where basketball_teams_website_articles_week2.articles_title = '$articles_title' ;";
	
	
		$result = $conn->query($sql);
		$carousel_comments_code = "";
					
		if ($result->num_rows > 0) {
									
			while($row = $result->fetch_assoc()) {
	
				if($row["articles_title"] == $articles_title){
					$carousel_comments_code = "";

					//creating card div
					$carousel_comments_code .= '<div class="card border-dark" style="width:100%; margin-bottom:20px" >';

						//concatenate the header for the card with the comment title
						$carousel_comments_code .= '<div class="card-header text-center">' . '<h4 class="card-title">' . $row["comments_title"] . '</h4>' .	'</div>';
						
						//concatenate the body for the card with the comment text
						$carousel_comments_code .= '<div class="card-body">' . '<p class="card-text">' . $row["comments_text"] . '</p>' . '</div>';

					// closing card div
					$carousel_comments_code .= '</div>';
				}

				//build an array of comments in order of oldest to most recent
				$comments[] = $carousel_comments_code;
			}

			//reverse the array so the most reccent comment is now at the start of the array
			$comments = array_reverse($comments ,true);


			//echo all the comments with displaying the most recent comment first
			foreach($comments as $comments){

				echo $comments;
			}
		}
	
		$conn->close();
	}


	function get_amount_of_comments($articles_title){
		
		//get details from config file to help us connect to the database
		include("../../model/config.php");
	
	
		$sql = "SELECT basketball_teams_website_articles_week2.articles_title, basketball_teams_website_comments.comments_title
			FROM basketball_teams_website_articles_week2
			INNER JOIN basketball_teams_website_comments
			ON basketball_teams_website_articles_week2.articles_id=basketball_teams_website_comments.articles_id;";
	
	
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

			echo $number_of_comments . " Comment";
		}
		else{

			echo $number_of_comments . " Comments";
		}
	}
?>