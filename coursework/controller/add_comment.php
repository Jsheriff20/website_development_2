<?php
session_start();

	include("../model/add_comment_api.php") ;
	
	
	$comments_title = stripcslashes($_POST['comments_title']);
	$comments_title = htmlspecialchars($comments_title);
	$comments_text = stripcslashes($_POST['comments_text']);
	$comments_text = htmlspecialchars($comments_text);
	$articles_id = stripcslashes($_POST['articles_id']);
	$articles_id = htmlspecialchars($articles_id);

	$comment_data -> comment_title = $_POST["comments_title"] ;
	$comment_data -> comment_text = $_POST["comments_text"] ;
	$comment_data -> articles_id = $_POST["articles_id"];

	$comment_data_json = json_encode($comment_data);
    create_comment($comment_data_json);
    

	header('Location: ' . $_SERVER['HTTP_REFERER']);
	
?>	
	
	