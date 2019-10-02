
<!DOCTYPE html>
<html lang="en">
	<?php include_once("link_include.php");?>
	<?php include_once("../../model/article_api.php"); ?>	
	<?php $article_json = json_decode(get_article(htmlspecialchars($_GET["articles_id"])));
		echo $article_json;?>
</html>
