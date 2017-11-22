<aside id="asideconnec" class="asidegrand">
		<p class="gras"><a href="?page=creation">Écrire un nouvel article</a></p>
		<hr color="black">
		<p class="gras">Catégorie:</p>
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
		<ul>
			<li><a href="#">- Mercurey par Maxime</a></li>
			<li><a href="#">- Lanson par Sébastien</a></li>
			<li><a href="#">- Whisky par Sophie</a></li>
		</ul>
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