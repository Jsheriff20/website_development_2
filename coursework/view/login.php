<?php 
	session_start();
	
	if($_SESSION['logged_in'] == "1"){
		header("location: week_pages/week1.php");
	}
	?>

<!DOCTYPE html>
<html lang="en">

<head>

	<title>Login</title>
	<?php include_once("link_include.php");?>

	<header class="banner navbar-fixed-top">
				
		<section class= "top-right">

			<img class= "banner_image" src= "images/nba_logo.jpg" alt= "nba logo"> 
		</section>


		<h1 id= "page_title">Login </h1>
	</header>


	<?php include_once("nav_bars.php");
			get_nav_bar("no_files_in_view");?>
</head>



<body>	
		<main id="main_container">

	<section class="row">
		<article class="col-sm-12"> 
			<h1>Login</h1>
			<form id="login" method="post" action="../controller/login_user.php"> 
				<table class="table">
					<tbody>
						<tr>
							<th>Username</th> 
							<td><input name="input_username" id="input_username" placeholder="Enter Username here" autofocus  required /> </td>
						</tr>
						<tr>
							<th scope="row">Password</th>
							<td>
								<input name="input_password" id="input_password" type="password" placeholder="Type Your Password here" required />
								<input type="checkbox" onclick="toggle_password_visability('input_password')"/> Toggle Visability
							</td>
						</tr>
						<tr>
							<th>Login </th>
							<td><input type="submit" value="Login"></td>
						</tr>
					</tbody>
				</table>
			</form>
		</article>
	</section>

</body>

</main>

</html>
