<?php 

	$conn = new mysqli("lochnagar.abertay.ac.uk", "sql1800367", "xqCNtH46949v", "sql1800367");

//will check if connection is not there and if its not it will carry out code inside
if(mysqli_connect_error()) {
	echo "Connection has failed: " . mysqli_connect_error();
	exit();
}
?>