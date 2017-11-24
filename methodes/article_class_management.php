<?php
class ArticleManager{
	private $_bdd;
    public function __construct($_bdd)
    {
        $this->_bdd = $_bdd;
    }
	public function add()
	{
    $q = $this->_bdd->prepare('INSERT INTO article(id_categorie, id_client, titre, contenu) VALUES(:id_categorie, :id_client, :titre, :contenu)');
    $q->execute(array(
			'id_categorie' => htmlspecialchars($_POST["categorie"]),
			'id_client' => htmlspecialchars($_SESSION['id']),
			'titre' => htmlspecialchars($_POST["titre"]),
			'contenu' => htmlspecialchars($_POST["contenu"])
			));

     		$donne = $q->fetch();
            $article = new Article($donne);
            return $article;
	}

	public function delete($art)
	{
	    $this->_bdd->exec('DELETE FROM article WHERE id_article = '.$art);
	}

	public function get($id)
	{
	        $id = (int) $id;

    $q = $this->_bdd->query('SELECT * FROM article WHERE id_article = '.$id);
    $donne = $q->fetch();

    return $donne;
	}

	public function getList()
	{
	        $art = [];

    $q = $this->_bdd->query('SELECT * FROM article ORDER BY date DESC');

    while ($donne = $q->fetch())
    {
      $art[] = new Article($donne);
    }

    return $art;
	}


public function getListclasse($url)
	{
	        $art = [];

    $q = $this->_bdd->prepare("SELECT * FROM article WHERE id_categorie=? ORDER BY date DESC " );
    $q->execute(array($url));

    while ($donne = $q->fetch())
    {
      $art[] = new Article($donne);
    }

    return $art;
	}



	public function update($titremodif, $contenumodif, $idmodif, $bdd)
	{
	$bdd->exec(" UPDATE article SET titre = '$titremodif' WHERE id_article = $idmodif");
	$bdd->exec(" UPDATE article SET contenu = '$contenumodif' WHERE id_article = $idmodif");
    }

	public function setBdd(PDO $bdd)
	{
	    $this->_bdd = $bdd;
	}
}





















?>