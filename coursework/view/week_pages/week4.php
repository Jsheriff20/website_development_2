<?php

session_start();


include_once("../../model/card_api.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title color="white">Week 4</title>

	<?php include_once("link_include.php");?>


	<header class="banner navbar-fixed-top">

		<section class="top-right">

			<img class="banner_image" src="../images/nba_logo.jpg" alt="nba logo">
		</section>

		<h1 id="page_title"> Week 4 </h1>
	</header>


	<?php include_once("../nav_bars.php");
			get_nav_bar("one_file_in_view");?>
</head>


<body class="bg">

	<main class="main_container">

		<?php echo json_decode(get_all_items()); ?>
	</main>
</body>

</html>