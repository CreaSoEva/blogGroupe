<aside id="asideconnec" class="asidegrand">
		<p class="gras"><a href="?page=creation">Écrire un nouvel article</a></p>
		<hr color="black">
		<p class="gras">Catégorie:</p>
<<<<<<< HEAD
		<ul>
<?php
            require_once "./methodes/classcategorieManager.php";
            require_once "./methodes/classcategorie.php";
            $liscate = new CategorieManager($bdd);
            $catego = $liscate->getListeCategories();
                foreach ($catego as $cat){
                    echo "<li><a href='?page=categorie&valeur=".$cat->getIdCategorie()."'>- ".$cat->getNom()."</li>";
            }    
?>
</ul>
=======
		<?php
			require_once "./methodes/classcategorieManager.php";
			require_once "./methodes/classcategorie.php";
			$liscate = new CategorieManager($bdd);
			$catego = $liscate->getListeCategories();
				foreach ($catego as $key => $value){
					echo "<ul>";
					echo "<li><a href='?page=categorie&valeur=".$value['nom']."'>- ".$value['nom']."</li>";
					echo "</ul>";
			}	
		?>
>>>>>>> 66589a71d4c866c3a7a3f6fea8ffcee805db2123
		<hr color="black">
		<p class="gras">Derniers articles parus:</p>
		<?php
			require_once "./methodes/article_class_management.php";
			require_once "./methodes/article_class.php";
			$usersquery1 = new ArticleManager($bdd);
			$user1 = $usersquery1->getList();
				foreach ($user1 as $key => $value){
				if($key < 3){
					echo "<ul>";
					echo "<li><a href='?page=article&value=".$value['id_article']."'>- ".$value['titre']." par ".$value['id_client']."</a></li>";
					echo "</ul>";
				}
			}	
		?>
		<hr color="black">
		<p class="gras">Derniers commentaires:</p>
		<ul>
			<li><a href="#">- Sophie sur Lanson</a></li>
			<li><a href="#">- Maxime sur Whisky</a></li>
		</ul>
		<hr color="black">
		<p class="gras">Mes articles:</p>
		<ul>
			<li><a href="#">- Whisky</a></li>
		</ul>
		<hr color="black">
		<p><a href="?page=listemembre">Liste des membres</p>
</aside>

<img src="./image/menu.png" id="menuconnecmini" class="boutonmenu">
<aside id="asideconnecmini" class="disparait">
		<p class="gras"><a href="#">Écrire un nouvel article</a></p>
		<hr color="black">
		<p class="gras">Catégorie:</p>
		<ul>
			<li><a href="#">- Alcool fort</a></li>
			<li><a href="#">- Vin</a></li>
			<li><a href="#">- Champagne</a></li>
		</ul>
		<hr color="black">
		<p class="gras">Derniers articles parus:</p>
		<?php
			require_once "./methodes/article_class_management.php";
			require_once "./methodes/article_class.php";
			$usersquery1 = new ArticleManager($bdd);
			$user1 = $usersquery1->getList();
				foreach ($user1 as $key => $value){
				if($key < 3){
					echo "<ul>";
					echo "<li>- ".$value['titre']." par ".$value['id_client']."</li>";
					echo "</ul>";
				}
			}	
		?>
		<hr color="black">
		<p class="gras">Derniers commentaires:</p>
		<ul>
			<li><a href="#">- Sophie sur Lanson</a></li>
			<li><a href="#">- Maxime sur Whisky</a></li>
		</ul>
		<hr color="black">
		<p class="gras">Mes articles:</p>
		<ul>
			<li><a href="#">- Whisky</a></li>
		</ul>
</aside>