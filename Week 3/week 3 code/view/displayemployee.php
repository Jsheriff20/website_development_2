<html>
<head>
</head>
<body>
	<h1>Display An Employee</h1>
	<?php
		include("../model/api-employee.php") ;
		$id = $_GET['id'] ;
		$employeetxt = getEmployeeById($id) ;;
		$employeejson = json_decode($employeetxt) ;
		echo "Employee :" ;			
		echo $employeejson-> ename ;
		echo " " ;
		echo $employeejson->ejob ;
		echo " in the ".$employeejson->edepartment." department" ;
		echo "<br/>" ;
		echo "Room " ;			
		echo $employeejson -> eroom ;
		echo " " ;
		echo "Phone " ;			
		echo $employeejson -> ephone ;
		echo " " ;
		echo "Email " ;			
		echo $employeejson -> eemail ;
		echo "<br/>" ;
	?> 
	Back to  <a href="displayall.php">Display All</a>
</body>
</html>