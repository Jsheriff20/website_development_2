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

<form name="register" id="register" action="../view/displayall.php" onsubmit="deleteAnEmployee()" method="post">
		<table class="table">
			<tbody>
				<tr>
					<h1>Delete User</h1>
				</tr>
				<tr>
					<th>Employee Number</th>
					<td><input name="employee_number" id="employee_number" type="text" placeholder="Enter Employee Number"  autofocus required /> </td>
				</tr>
				<tr>
					<th>Done? </th>
					<td><input type="submit" name="submit"  value="Delete Employee" action=""></td>
				</tr>
			</tbody>
		</table>	
	</form>
</body>
</html>