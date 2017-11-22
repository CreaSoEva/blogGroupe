<aside id="asidenonconnec" class="asidegrand">
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
</aside>

<img src="./image/menu.png" id="menunonconnecmini" class="boutonmenu">
<aside id="asidenonconnecmini" class="disparait">
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