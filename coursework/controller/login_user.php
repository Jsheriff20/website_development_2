<?php

    include_once("../model/login_api.php");
    

    $username = $_POST['input_username'];
	$password = $_POST['input_password']; 
	
	//validate password entered and prevent any attempt 
	$username = stripcslashes($username);
	$username = htmlspecialchars($username);
	$password = stripcslashes($password);
	$password = htmlspecialchars($password);
	
	$login -> username = $username;
	$login -> password = $password;
	
	$login_json = json_encode($login);

    login_user($login_json);
?>