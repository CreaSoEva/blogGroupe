<?php 
$id = $_GET['value']; 
			$artisolo = new ArticleManager($bdd);
			$article = $artisolo->get($id);
			$userid = $article['id_client'];
			$url = $article['id_categorie'];
			$categorie = new CategorieManager($bdd);
			$cat = $categorie->getCategorie($url);	
			$um = new UserManager($bdd);
			$auteur=$um->getUserById($userid);
			//commentaire
			$commentaire = new CommentaireManager($bdd);
			$affichecommentaire = $commentaire->getListclass($id);
if (isset($_SESSION['id'])) {
	require_once "./vues/article.php";

}else{
	require_once "./vues/article.php";
}
?>