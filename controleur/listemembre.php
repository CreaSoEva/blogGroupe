<?php 
if (isset($_SESSION['id'])) {
	require_once "./vues/listemembre.php";
}else{
	header("Location: index.php");
}
?>