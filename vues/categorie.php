<?php 
	if (isset($_SESSION['id'])){
		require_once "../inc/headerconnec.inc.php";
		require_once "../inc/asideconnec.inc.php";
	}else{
		require_once "../inc/headernonconnec.inc.php";
		require_once "../inc/asidenonconnec.inc.php";
	}
?>
	<!-- Header et aside -->
	<!-- Section -->
	<section>
		
			<?php	
			require_once '../methodes/classcategorie.php';
			require_once '../methodes/classcategorieManager.php';
			require_once '../controleur/categorie.php';
			foreach ($liste as $categorie) {
			echo "<h1> ".$categorie->getNom();"</h1>";
			}?>				

	</section>