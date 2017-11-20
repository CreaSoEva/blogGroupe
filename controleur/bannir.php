<?php 
if (isset($_SESSION['id'])) {
	require_once "./methodes/bannir.php";
}else{
	header("Location: index.php");
}
?>