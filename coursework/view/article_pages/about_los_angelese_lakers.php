<?php include_once("php_functions.php") ?>

<!DOCTYPE html>
<html lang="en">
		<head>
			<title color="white"><?php get_article_details("About Los Angelese Lakers", "articles_title") ?></title>


			<?php include_once("link_include.php");?>
			

			<header class="banner navbar-fixed-top">
				
				<section class= "top-right">
					
					<img class= "banner_image" src= "../images/nba_logo.jpg" alt= "nba logo"> 
				</section>

				<h3> <?php get_article_details("About Los Angelese Lakers", "articles_title") ?> </h3>
			</header>

			<?php include_once("../nav_bars.php");
			get_nav_bar("one_file_in_view");?>
			
		</head>


		<body class= "bg">

			<main class= "main_container" >
				<div class="row">
					<div class="col-lg-12">

					<button type="button" class="btn btn-primary streched-link" onclick="history.back()">Back</button>
					</div>
				</div>


				<div class="row ">

					<!-- this is where the article is displayed -->
					<div class="col-lg-12">

						<!-- row for article title and image slide show-->
						<div class="row text-center" style="padding-bottom:50px; margin-left: 10%; margin-right: 10%;">

							<div class="col">

								<!-- title of the article -->
								<h1> <?php get_article_details("About Los Angelese Lakers", "articles_title") ?> <h1>


							<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">

									<?php get_article_images("About Los Angelese Lakers");?>
								</div>
							</div>
							
							</div>						
						</div>
							

						<!--row for article text-->
						<div class="row" style=" margin-left: 10%; margin-right: 10%;">	

							<div class="col">
							
								<?php get_article_details("About Los Angelese Lakers", "articles_text") ?>
							</div>
						</div>


						<!--row for author text-->
						<div class="row" style="padding-bottom:50px; margin-left: 10%; margin-right: 10%;">

							<div class="col">
								<h3> Written by author '<?php get_article_details("About Los Angelese Lakers", "articles_author") ?>' </h3>

							</div>
						</div>


						<!--row for user to create a comment-->
						<div class="row text-center" style="margin-left: 10%; margin-right: 10%;">

							<div class="col">

							<h2> <?php get_amount_of_comments("About Los Angelese Lakers")?> </h2>

								<form name="add_comment" id="add_comment" action="add_comment.php" onsubmit="return validate_comment()" method="post">
									<table class="table">
										<tbody>
											<tr>
												<th>Comment Title</th>
												<td><input name="comments_title" id="comments_title" type="text" placeholder="add a title to your comment..."  required /> </td>
											</tr>

											
											<tr>
												<th>Comment Text</th>
												<td><input name="comments_text" id="comments_text" type="text" placeholder="add your comment..." required /> </td>
											</tr>

											<input type='hidden' name='articles_title' value='<?php get_article_details("About Los Angelese Lakers", "articles_title")?>'/>
											<input type='hidden' name='session_login' value='<?php echo $_SESSION["logged_in"]?>'/>	
											

											<tr>
												<th>Post Comment </th>
												<td><input type="submit" name="comment" value="Post" action="#"></td>
											</tr>
										</tbody>
									</table>	
								</form>
							</div>
						</div>


						<!--row for comments-->
						<div class="row" style="padding-bottom:10px; margin-left: 10%; margin-right: 10%;">	

							<?php get_article_comments("About Los Angelese Lakers")?>
						</div>
					</div>
				</div>
			</main>
		</body>
</html>
