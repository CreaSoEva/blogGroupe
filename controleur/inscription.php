<?php 
	if (isset($_SESSION['connexion'])) {
		header("Location: index.php");
	}else{
		require_once "./vues/inscription.php";
	}

?>