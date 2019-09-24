<?php

	include("../model/api-employee.php") ;

	$data -> eno = $_POST["eno"] ;
	$data -> ename = $_POST["ename"] ;
	$data -> ejob = $_POST["ejob"] ;
	$data -> edepartment = $_POST["edepartment"] ;
	$data -> eroom = $_POST["eroom"] ;
	$data -> ephone = $_POST["ephone"] ;
	$data -> eemail = $_POST["eemail"] ;
	$datatxt = json_encode($data) ;
	$res = createemployee($datatxt) ;
	//echo $res ;
	echo '<script type="text/javascript">window.open("../view/displayall.php", name="_self")</script>';
	
?>	
	
	