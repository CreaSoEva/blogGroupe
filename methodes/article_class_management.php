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
			'id_categorie' => $_POST["categorie"],
			'id_client' => $_SESSION['nom'],
			'titre' => $_POST["titre"],
			'contenu' => $_POST["contenu"]
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

    $q = $this->_bdd->query('SELECT id_article, id_categorie, id_client, titre, contenu, date FROM article WHERE id_article = '.$id);
    $donne = $q->fetch(PDO::FETCH_ASSOC);

    return new Article($donne);
	}

	public function getList()
	{
	        $art = [];

    $q = $this->_bdd->query('SELECT id_article, id_categorie, id_client, titre, contenu, date FROM article ORDER BY date');

    while ($donne = $q->fetch(PDO::FETCH_ASSOC))
    {
      $art[] =$donne;
    }

    return $art;
	}

	public function update(Article $art)
	{
    $q = $this->_bdd->prepare('UPDATE article SET id_article = :id_article, id_categorie = :id_categorie, id_client = :id_client, titre = :titre, contenu = :contenu, date = :date WHERE id_article = :id_article');

    $q->bindValue(':id_article', $art->id_article());
    $q->bindValue(':id_categorie', $art->id_categorie());
    $q->bindValue(':id_client', $art->id_client());
    $q->bindValue(':titre', $art->titre());
    $q->bindValue(':contenu', $art->contenu());
    $q->bindValue(':date', $art->date());

    $q->execute();
  
	}

	public function setBdd(PDO $bdd)
	{
	    $this->_bdd = $bdd;
	}
}





















?>