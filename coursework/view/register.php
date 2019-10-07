<!DOCTYPE html>
<html lang="en">

<head>

	<title>Register</title>
	<?php include_once("link_include.php");?>
	<script src="passwordscheck.js"></script>


		<header class="banner navbar-fixed-top">
				
			<section class= "top-right">

				<img class= "banner_image" src= "images/nba_logo.jpg" alt= "nba logo"> 
			</section>

			<h1 id= "page_title">Register </h1>
		</header>


		<?php include_once("nav_bars.php");
			get_nav_bar("no_files_in_view");?>

</head>


<body>
	<main id="main_container">
	<section class="row"></section>
	<h1>Register!</h1>
	<form name="register" id="register" action="../controller/add_new_user.php" onsubmit="return validate_register()" method="post">
		<table class="table">
			<tbody>
				<tr>
					<th>Username</th>
					<td><input name="username" id="username" type="text" placeholder="Enter Usename"  autofocus required /> </td>
				</tr>
				<tr>
					<th>Password</th>
					<td>
						<input name="password" id="password" type="password" placeholder="Type Your Password" required />
						<input type="checkbox" onclick="toggle_password_visability('password')"/> Toggle Visability
					</td>

				</tr>
				<tr id="password_result">
					<th> </th>
					<td><span id="result"></span></td>
				</tr>
				<tr>
					<th>Confirm Password</th>
					<td>
						<input name="confirm_password" id="confirm_password" type="password" placeholder="Retype Your Password" required />
						<input type="checkbox" onclick="toggle_password_visability('confirm_password')"/> Toggle Visability
					</td>
				</tr>
				<tr>
					<th>First Name </th>
					<td><input name="first_name" id="first_name" type="text" placeholder="Type Your Name" required /></td>
				</tr>
				<tr>
					<th>Surname </th>
					<td><input name="surname" id="surname" type="text" placeholder="Type Your Name" required /></td>
				</tr>
				<tr>
					<th>Email </th>
					<td><input name="email" id="email" type="email" placeholder="Type Your Email" required /></td>
				</tr>
				<tr>
					<th>Contact Number (Starting With +44..)</th>
					<td><input name="contact_number" id="contact_number" type="number" placeholder="Type Your Number" required /></td>
				</tr>
				<tr>
					<th> </th>
					<td><input type="submit" name="submit"  value="Register" action="login.php"></td>
				</tr>
			</tbody>
		</table>	
	</form>
	</body>
	</section>
</main>
</body>
</html>