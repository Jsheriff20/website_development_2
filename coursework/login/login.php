<!DOCTYPE html>
<html lang="en">

<head>

	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="../../jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../CSS.css">
	<script type="text/javascript" src="../script.js" ></script>

	<header class="banner navbar-fixed-top">
				
		<section class= "top-right">

			<img class= "banner_image" src= "../images/nba_logo.jpg" alt= "nba logo"> 
		</section>


		<h1 id= "page_title">Login </h1>
	</header>


	<nav class="navbar navbar-expand-md navbar-dark bg-dark">

			<div class="container">
	
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">>
					
					<span class="navbar-toggler-icon"></span>
				</button>
	
	
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
	
					<div class="navbar-nav">
	
						<a class="nav-item nav-link" href="../register/register.php">Register</a>
					</div>
				</div>
			</div>
		</nav>
</head>



<body>	
		<main id="main_container">

	<section class="row">
		<article class="col-sm-12"> 
			<h1>Login</h1>
			<form id="login" method="post" action="login_functionality.php"> 
				<table class="table">
					<tbody>
						<tr>
							<th>Username</th> 
							<td><input name="input_username" id="input_username" placeholder="Enter Username here" autofocus  required /> </td>
						</tr>
						<tr>
							<th scope="row">Password</th>
							<td><input name="input_password" id="input_password" type="password" placeholder="Type Your Password here" required /></td>
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
