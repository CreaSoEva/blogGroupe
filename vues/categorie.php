<!DOCTYPE html>
<html>
<head>
	<title>Création d'article</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="./js/script.js"></script>
</head>

<body>
	<!-- Header -->
<?php 
	if (isset($_SESSION['id'])){
		require_once "./inc/headerconnec.inc.php";
		require_once "./inc/asideconnec.inc.php";
	}else{
		require_once "./inc/headernonconnec.inc.php";
		require_once "./inc/asidenonconnec.inc.php";
	}
?>
	<!-- Header et aside -->
	<!-- Section -->
	<section>
		
			<?php	
			require_once './methodes/classcategorie.php';
			require_once './methodes/classcategorieManager.php';
			require_once './controleur/categorie.php';
			

			// <!-- si la valeur dans mon url est la valeur alcool fort, alors on va appele tous les articles de la categorie alcool fort -->

			$url = $_GET['valeur'];
				if ($url == "Alcool fort"){
							echo $url;
			 		}if ($url == "Vin"){
			 					echo $url;
			 			}if ($url == "Champagne"){
			 						echo $url;
				 }


			?>
				
		

	</section>
</body>
</html>