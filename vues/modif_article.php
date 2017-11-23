<?php 
if (isset($_SESSION['id'])) {
	?>
	<!DOCTYPE html>
<html>
<head>
	<title>Modification d'article</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="./js/script.js"></script>
</head>
<body>
	<!-- Section -->
	<section>
		<?php
		$id = $_SESSION['art'];
		$req = 'SELECT * FROM article WHERE id_article='.$id;
		$rep = $bdd->query($req);
		
		$donnee = $rep->fetch();
			$categorie = $donnee['id_categorie'];
			$titre= $donnee['titre'];
			$contenu = $donnee['contenu'];
		?>
		<form class="form" method="POST">
			<label>Titre:</label><br/>
			<input type="text" name="titre" value="<?php echo $titre; ?>"><br/><br/>
			<label><?php echo $categorie; ?></label><br/><br/>
			<label>Contenu:</label><br/>
			<textarea name="contenu"><?php echo $contenu; ?></textarea><br/><br/>
			<input type="submit" name="publier" value="Publier">
		</form>

<?php
if (isset($_POST["titre"])) {
	$idmodif = $_SESSION['art'];
	$titremodif = $_POST["titre"];
	$contenumodif = $_POST["contenu"];
	$usersquery = new ArticleManager($bdd);
	$user = $usersquery->update($titremodif, $contenumodif, $idmodif, $bdd);}

?>
	</section>
	<!--Fin de section -->
</body>
</html>
<?php
}else{
	header("Location: ./index.php");
}
 ?>