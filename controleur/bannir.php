<?php 
if (isset($_SESSION['connexion'])) {
	require_once "./methodes/bannir.php";
}else{
	header("Location: index.php");
}
?>