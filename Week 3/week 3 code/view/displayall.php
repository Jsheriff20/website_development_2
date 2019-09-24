<html>
<head>
</head>
<body>
	<h1>Display All Employees</h1>
	<?php
		include("../model/api-employee.php") ;
		$employeetxt = getAllEmployees() ;
		// echo $employeetxt ;
		$employeejson = json_decode($employeetxt) ;
		// var_dump($employeejson) ;
		for ($i=0 ; $i<sizeof($employeejson) ; $i++) {
			echo "Employee :" ;			
			echo "<a href=displayemployee.php?id=" ;
			echo $employeejson[$i] -> eno ;
			echo ">" ;
			echo $employeejson[$i] -> ename ;
			echo "</a><br/>" ;
		}
	?> 
</body>
</html>