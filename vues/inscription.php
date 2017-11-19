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
	//require_once "../inc/headerconnec.inc.php";
	require_once "../inc/headernonconnec.inc.php";
?>
	<!-- Fin de header -->
	<!-- Aside -->
<?php 
	//require_once "../inc/asideconnec.inc.php";
	require_once "../inc/asidenonconnec.inc.php";
?>
	<!-- Fin de aside -->
	<!-- Section -->
	<section>
		<form>
			<label>Nom:</label><br/>
			<input type="text" name="nom" required><br/><br/>
			<label>Mot de passe:</label><br/>
			<input type="password" name="motdepasse" required><br/><br/>
			<label>Email:</label><br/>
			<input type="email" name="mail" required><br/><br/>
			<input type="submit" name="insription" value="S'inscrire">
		</form>




	</section>




	<!--Fin de section -->
<?php 
	require_once "../inc/footer.inc.php";
?>


</body>
</html>