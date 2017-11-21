	<!-- Section -->
	<section>
			<h1>Derniers articles</h1>
			<?php
			require_once "./methodes/article_class_management.php";
			require_once "./methodes/article_class.php";
			$usersquery1 = new ArticleManager($bdd);
			$user1 = $usersquery1->getList(); 
			var_dump($user);

			for($i = 1; $i <= 4; $i++){
				echo "<ul>";
				echo "<li>".$user1['titre']." par ".$user1['id_client']."</li>";	
				echo "</ul>";
			}
			?>
	</section>
	<!--Fin de section -->