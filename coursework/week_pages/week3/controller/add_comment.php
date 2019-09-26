<?php
session_start();

	//used to display errors when testing remove once ready to be published.
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	include("../model/add_comment_function.php") ;


	$comment_data -> comment_title = $_POST["comments_title"] ;
	$comment_data -> comment_text = $_POST["comments_text"] ;
	$comment_data -> articles_title = $_POST["articles_title"];

	$comment_data_json = json_encode($comment_data);
    create_comment($comment_data_json);
    

	header('Location: ' . $_SERVER['HTTP_REFERER']);
	
?>	
	
	