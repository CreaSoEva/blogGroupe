<?php
if (isset($_SESSION['id'])){
	require_once "./vues/creation_article.php";
}else{
	header("Location: index.php");
}
?>