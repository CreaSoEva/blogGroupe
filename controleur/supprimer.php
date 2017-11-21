<?php 
if (isset($_SESSION['id'])) {
	$art = $_GET['value'];
	require_once "./methodes/article_class_management.php";
	require_once "./methodes/article_class.php";
	$usersquery = new ArticleManager($bdd);
	$user = $usersquery->delete($art);
	header("Location: index.php");
}else{
	header("Location: index.php");
}
?>