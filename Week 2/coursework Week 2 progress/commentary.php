<?php 
	session_start();
	// if the user is already logged in this will run
	if ($_SESSION["logged_in"] != "1" ){
		header("location: login/login.php");
		exit();
	}
?>


<!DOCTYPE html>
<html lang="en">
		<head>
			<title color="white">Commentary</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
			<script src="jquery-3.3.1.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
			<link rel="stylesheet" type="text/css" href="CSS.css">
			<script type="text/javascript" src="script.js" ></script>
			

			<header class="banner navbar-fixed-top">
				
				<section class= "top-right">
					<img class= "banner_image" src= "images/nba_logo.jpg" alt= "nba logo"> 
				</section>

				<h1 id= "PageTitle"> Commentary </h1>
			</header>

			<?php

				include_once("commentary_nav_bar.html");
			?>
		</head>


		<body class= "bg">

			<main class= "main_container"style="text-align: center">

				<div class="row" style="padding-bottom:50px;">

					<div class="col-sm-12">
						<h1>Week 1</h1><br><br>

						<h2> At the heart of any HTML5 frameworks is a grid system. Summarise the grid system you will use in Bootstrap.</h2><br>
						<br>

						<p>
							Bootstrap works like a grid where each individual square/ element can change size (which is limited however 
							to shape and amount of information inside) and location of the page. Any information within these square/ 
							elements will collapse and fill the space no matter how the size or the shape changes.<br>
							My bootstrap grid system will consist of different quadrilateral shaped elements which allowed each element 
							to be manoeuvred and manipulated around the page depending on the width and height of the page. However, 
							some of my element will be fixed in position and can only change width such as my navigation bar that will 
							change from a bar of buttons with dropdowns to a burger button multi-dropdown menu.<br>
							<br>
						</p>
					</div>
				</div>
				<div class="row" style="padding-bottom:50px;">

					<div class="col-sm-12">

						<h2>Menu systems are often a bind to get right especially if you want a multi-dropdown menu. In an ideal world 
						you should write the HTML for a menu as a set of hierarchical un-numbered lists. Summarise how you will 
						implement menus in your site using Bootstrap.</h2><br>
						<br>
						
						<p>
						As mentioned before my program will use multi-dropdown menus that will be displayed in a list of buttons, 
						however when the page changes shape and size it will turn into a burger button multi-dropdown menu. The 
						change into a burger menu allows the user to view the browser at any size and still have easy manoeuvrability
						 around the site, this comes in handy especially for people viewing the site on mobile devices. The order of
						  my navigation buttons and sub menus drop downs will be put in order from most likely to the least likely 
						  to be clicked on. The order will be maintained across all pages to prevent users having to search each 
						  navigation menu for the navigation button they want to click, the order will also not be affected if it 
						  is navigation bar or a burger dropdown menu.<br>
						</P>
					</div>
				</div>
				<div class="row" style="padding-bottom:50px;">

					<div class="col-sm-12">

						<h2>Pick out 5 further features, other than grid and menu, in Bootstrap that you think will be useful. Comment on
						 their use.</h2> <br>
						<br>

						<p>
						1.	Alerts – This can be used for when a user is filling in a form for useful feed back such as if a required 
						field has not been filled in or not met certain expected standards.<br> 
						2.	Progress bar – This is another useful element that can be included for feedback for example if there was a
						 quiz or form to be filled out a progress bar could be used to encourage a user to finish it due to the constant
						  update on how close they are to the finishing point.<br>
						3.	Popovers – These can be an incredible way to display information without having to take up to much room,
						 for example if there was not enough room to put contact details on the page and it was not a huge requirement
						  a simple button named “contact details” with a popover would be a great way to include it without using up
						   much additional space. <br>
						4.	Toasts – These are like alerts however these are less harsh and doesn’t suggest a problem like an alert
						 would. Toasts can be used in many different ways as they are more friendly than alerts they can be used for
						  reminders, tasks to complete, useful popup links and even adverts. <br>
						5.	Carousel – A carousel is a slide show element that can be used to display certain element in a order which
						 can be controlled manually or automatically cycle through them. Each side can be set up for different things 
						 such as sample videos, images and linked images that can take users to pages. <br>
						</p>
					</div>
				</div>
			</main>
		</body>
</html>
