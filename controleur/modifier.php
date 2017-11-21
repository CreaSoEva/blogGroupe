<?php 
if (isset($_SESSION['id'])) {
	$_SESSION['art'] = $_GET['value'];
	require_once "./vues/modif_article.php";
}else{
	header("Location: index.php");
}
?>