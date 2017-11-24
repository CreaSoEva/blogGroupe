<!DOCTYPE html>
<?php
if (isset($_SESSION['merde'])) {
	unset($_SESSION['merde']);
}
?>
<html>
<head>
	<title>Blog  des alcooliques</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="./js/script.js"></script>
</head>

<body>
<!-- Header et aside -->


	<!-- Header et aside -->
	<!-- Section -->
	<section>
			<h1>Derniers articles</h1>
			<?php
			foreach ($article as $art) {
				$cat = $categorie->getCategorie($art->getId_categorie());
				$auteur = $um->getUserById($art->getId_client());
				$nombrecompteur = $compteur->compt($art->getId_article());
				echo "<article>";
				echo "<p> Catégorie: ".$cat->getNom()."</p>
				<h3>".$art->getTitre()."</h3>
				<p>".$auteur->getUser()." le ".$art->getDate()."</p>
				<p>".$art->getContenu()."</p>";
				if (isset($_SESSION['id'])){
					echo "<button><a href='?page=modifier&value=".$art->getId_article()."'>Modifier</a></button>";
					if ($_SESSION['id'] == 1 || $_SESSION['id'] == 2 || $_SESSION['id'] == 3) {
					echo "<button data-id=".$art->getId_article()." class='supprart'>Supprimer</button>";
					}
				}
				foreach ($nombrecompteur as $key => $value) {
					$nombrefinal = $value[0];
				}
				echo "<a href='?page=article&value=".$art->getId_article()."'><span class='commentaire'>
				Commentaires <span id='nombrecompteur'>".$nombrefinal."</span></span></a>";
				echo "</article>";
				}			
			?>
	</section>
	<!--Fin de section -->
</body>
</html>