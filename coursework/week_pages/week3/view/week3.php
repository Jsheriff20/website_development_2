<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


session_start();
// if the user is already logged in this will run
if ($_SESSION["logged_in"] != "1") {
	header("location: ../login/login.php");
	exit();
}

include_once("../model/card_functions.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title color="white">Week 3</title>


	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../../../CSS.css">
	<script type="text/javascript" src="../../../script.js"></script>


	<header class="banner navbar-fixed-top">

		<section class="top-right">

			<img class="banner_image" src="../../../images/nba_logo.jpg" alt="nba logo">
		</section>

		<h1 id="page_title"> Week 3 </h1>
	</header>


	<?php include_once("../nav_bar.html"); ?>
</head>


<body class="bg">

	<main class="main_container">

		<?php get_all_items(); ?>
	</main>
</body>

</html>