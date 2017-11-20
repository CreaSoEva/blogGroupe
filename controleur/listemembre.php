<?php 
if (isset($_SESSION['connexion'])) {
	require_once "./vues/listemembre.php";
}else{
	header("Location: index.php");
}
?>