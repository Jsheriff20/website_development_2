
<!DOCTYPE html>
<?php include_once("../../model/article_functions.php") ?>
<html lang="en">
		<head>
			<title color="white"><?php //get_article_details("About Chicago Bulls", "articles_title") ?></title>


			<?php include_once("../../link_include.php");?>
			

			<header class="banner navbar-fixed-top">
				
				<section class= "top-right">
					
					<img class= "banner_image" src= "../../../../images/nba_logo.jpg" alt= "nba logo"> 
				</section>

				<h3>  </h3>
			</header>

			<?php include_once("../../nav_bar.html");?>
		</head>


		<body class= "bg">

			<main class= "main_container" >
				<div class="row">
					<div class="col-lg-12">

					<button type="button" class="btn btn-primary streched-link" onclick="history.back()">Back</button>
					</div>
				</div>


				<div class="row">
				<?php get_article("About Chicago Bulls");?>

					<!-- this is where the article is displayed -->
					<div class="col-lg-12 text-center">

						<!-- row for article title and image slide show-->
						<div class="row" style="padding-bottom:50px; margin-left: 10%; margin-right: 10%;">

							<div class="col">

								<!-- title of the article -->
								<h1> <?php //get_article_details("About Chicago Bulls", "articles_title") ?> <h1>


							<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">

									<?php //get_article_images("About Chicago Bulls");?>
								</div>
							</div>
							
							</div>						
						</div>
							

						<!--row for article text-->
						<div class="row" style=" margin-left: 10%; margin-right: 10%;">	

							<div class="col">
							
								<?php //get_article_details("About Chicago Bulls", "articles_text") ?>
							</div>
						</div>


						<!--row for author text-->
						<div class="row" style="padding-bottom:50px; margin-left: 10%; margin-right: 10%;">

							<div class="col">
								<h3> Wrote by author '<?php //get_article_details("About Chicago Bulls", "articles_author") ?>' </h3>

							</div>
						</div>


						<!--row for user to create a comment-->
						<div class="row" style="margin-left: 10%; margin-right: 10%;">

							<div class="col">

							<h2> <?php //get_amount_of_comments("About Chicago Bulls")?> </h2>

								<form name="add_comment" id="add_comment" action="../../model/add_comment.php" onsubmit="return validate_comment()" method="post">
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

											<input type='hidden' name='articles_title' value='<?php //get_article_details("About Chicago Bulls", "articles_title")?>'/>

											

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

							<?php //get_article_comments("About Chicago Bulls")?>
						</div>
					</div>
				</div>
			</main>
		</body>
</html>
