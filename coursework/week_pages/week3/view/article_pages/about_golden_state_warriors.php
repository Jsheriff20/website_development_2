<!DOCTYPE html>
<html lang="en">
	<?php include_once("../../link_include.php");?>
	<?php include_once("../../model/article_functions.php"); ?>
	<?php $article_json = json_decode(get_article("About Golden State Warriors"));
		echo $article_json;?>
</html>