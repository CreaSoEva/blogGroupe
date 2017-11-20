<!DOCTYPE html>
<html>
<head>
	<title>Création d'article</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
</head>
<body>
	<!-- Header -->
<?php 
	require_once "../inc/headerconnec.inc.php";
	//require_once "../inc/headernonconnec.inc.php";
?>
	<!-- Fin de header -->
	<!-- Aside -->
<?php 
	require_once "../inc/asideconnec.inc.php";
	//require_once "../inc/asidenonconnec.inc.php";
?>
	<!-- Fin de aside -->
	<!-- Section -->
	<section>
		<form class="form">
			<label>Titre:</label><br/>
			<input type="text" name="titre"><br/><br/>
			<select id="choixcate">
				<option value="alcoolfort">Alcool fort</option> 
  				<option value="vin">Vin</option>
  				<option value="champagne">Champagne</option>
			</select><br/><br/>
			<label>Contenu</label><br/>
			<textarea></textarea><br/><br/>
			<input type="submit" name="publier" value="Publier">
		</form>




	</section>




	<!--Fin de section -->
<?php 
	require_once "../inc/footer.inc.php";
?>


</body>
</html>