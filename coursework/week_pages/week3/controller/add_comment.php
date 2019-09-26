<?php

	include("../model/add_comment_function.php") ;

	$comment_data -> comment_title = $_POST["comments_title"] ;
	$comment_data -> comment_text = $_POST["comments_text"] ;

	$comment_data_json = json_encode($comment_data);
    create_comment($comment_data_to_convert) ;
    

	//header("location: ../view/" . $_POST["articles_title"] . ".php");
	
?>	
	
	