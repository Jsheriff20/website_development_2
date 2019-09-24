<!DOCTYPE html>
<html lang="en">

<head>

	<title>Register</title>
	<?php include_once("../link_include.php");?>


		<header class="banner navbar-fixed-top">
				
			<section class= "top-right">

				<img class= "banner_image" src= "../images/nba_logo.jpg" alt= "nba logo"> 
			</section>

			<h1 id= "page_title">Register </h1>
		</header>


	<nav class="navbar navbar-expand-md navbar-dark bg-dark">

		<div class="container">

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">>
				
				<span class="navbar-toggler-icon"></span>
			</button>


			<div class="collapse navbar-collapse" id="navbarNavDropdown">

				<div class="navbar-nav">

					<a class="nav-item nav-link" href="../login/login.php">Login</a>
				</div>
			</div>
		</div>
	</nav>

</head>


<body>
		<main id="main_container">
	<section class="row"></section>
	<h1>Register!</h1>
	<form name="register" id="register" action="connect.php" onsubmit="return validate_register()" method="post">
		<table class="table">
			<tbody>
				<tr>
					<th>Username</th>
					<td><input name="username" id="username" type="text" placeholder="Enter Usename here"  autofocus required /> </td>
				</tr>
				<tr>
					<th scope="row">Password</th>
					<td><input name="password" id="password" type="password" placeholder="Type Your Password here" required /></td>
				</tr>
				<tr id="password_result">
					<th> </th>
					<td><span id="result"></span></td>
				</tr>
				<tr>
					<th>name </th>
					<td><input name="name" id="name" type="text" placeholder="Type Your Name here" required /></td>
				</tr>
				<tr>
					<th>Email </th>
					<td><input name="email" id="email" type="email" placeholder="Type Your Email here" required /></td>
				</tr>
				<tr>
					<th>Contact Number </th>
					<td><input name="contact_number" id="contact_number" type="number" placeholder="Type Your Number here" required /></td>
				</tr>
				<tr>
					<th>Done? </th>
					<td><input type="submit" name="submit"  value="Register" action="../login/login.php"></td>
				</tr>
			</tbody>
		</table>	
	</form>
	</body>
	</section>
</main>
</body>
</html>