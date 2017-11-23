<!DOCTYPE html>
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
			<h1>Article</h1>
			<?php
			echo "<article>";
			echo "<p> Catégorie: ".$cat->getNom()."</p>
				<h3>".$article['titre']."</h3>
				<p>".$auteur->getUser()." le ".$article['date']."</p>
				<p>".$article['contenu']."</p>";
				echo "</article>";
				
				//afficher les commentaires		

			// <!-- si la valeur dans mon url est la valeur alcool fort, alors on va appele tous les articles de la categorie alcool fort -->
				echo "<h4>Commentaire:</h4>";
			foreach ($affichecommentaire as $com){
				echo "<article>";
				echo "<h3>".$com->getAuteur()."</h3><p> Le: ".$com->getDate()."</p><p>".$com->getContenu()."</p>";
				echo "</article>";
			}

				//laissez un commentaire
			echo "<form id='form' method='POST'>";
				if (isset($_SESSION['id'])){
					echo "<h2>Laissez un commentaire</h2><p>Vous êtes enregistré en tant que ".$_SESSION['nom']."</p>
					<textarea name='contenu'>Ecrire un commentaire</textarea></br><input type='submit' name='postcomment' value='Poster'>

					";
				}else{
					echo "<h2>Laissez un commentaire</h2><p>Vous devez être enregistré pour poster un commentaire</p>";
				}
				echo "</form>";
				if (isset($_POST["contenu"])){
				 $com = new CommentaireManager($bdd);
				 $com->add($id, $_SESSION['nom'], $_POST["contenu"]);
				}
			?>
	</section>
	<!--Fin de section -->
</body>
</html>