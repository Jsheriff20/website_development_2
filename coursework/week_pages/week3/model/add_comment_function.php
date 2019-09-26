<?php 

function create_comment($encoded_comment_data){	
		
	include("connect.php");

	$comment_data = json_decode($encoded_comment_data);


	//get infomation from comment form
	$comments_title = $comment_data -> comment_title;
	$comments_text = $comment_data -> comment_text;
	$articles_title = $comment_data -> articles_title;


	// this will get the users id 

	$sql = "SELECT * FROM basketball_teams_website_users WHERE users_username = ?;";
	$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			echo "sql Statment failed!";
		}
		else{
			// bind parameter to placeholders
			mysqli_stmt_bind_param($stmt, "s", $_SESSION['username']);
			// run parameters inside of database
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			$row = mysqli_fetch_array($result);
			$users_id = $row["users_id"];
		}


		//this will get the articles id
	$sql = "SELECT * FROM basketball_teams_website_articles WHERE articles_title = ?;";
	$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			echo "sql Statment failed!";
		}
		else{
			// bind parameter to placeholders
			mysqli_stmt_bind_param($stmt, "s", $articles_title);
			// run parameters inside of database
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			$row = mysqli_fetch_array($result);
			$articles_id = $row["articles_id"];
		}

	
		//this will insert the comment into the database with the needed infomation
		$sql = "INSERT INTO basketball_teams_website_comments (comments_title, comments_text, users_id, articles_id)
			VALUES (?, ?, ?, ?);";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			echo "sql error";
		}
		else{
			mysqli_stmt_bind_param($stmt, "ssii", $comments_title, $comments_text, $users_id, $articles_id);
			mysqli_stmt_execute($stmt);
		}
}
?>
