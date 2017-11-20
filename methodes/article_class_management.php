<?php
class ArticleManager{
	private $_db;
	public function __construct($db)
	{
		$this->setDb($db);
	}
	public function add(article $art)
	{
    $q = $this->_db->prepare('INSERT INTO article(id_article, id_categorie, id_client, titre, contenu, date) VALUES(:id_article, :id_categorie, :id_client, :titre, :contenu, :date)');

    $q->bindValue(':id_article', $art->id_article());
    $q->bindValue(':id_categorie', $art->id_categorie());
    $q->bindValue(':id_client', $art->id_client());
    $q->bindValue(':titre', $art->titre());
    $q->bindValue(':contenu', $art->contenu());
    $q->bindValue(':date', $art->date());

    $q->execute();
	}

	public function delete(article $art)
	{
	    $this->_db->exec('DELETE FROM article WHERE id_article = '.$art->id());
	}

	public function get($id)
	{
	        $id = (int) $id;

    $q = $this->_db->query('SELECT id_article, id_categorie, id_client, titre, contenu, date FROM article WHERE id_article = '.$id);
    $donnees = $q->fetch(PDO::FETCH_ASSOC);

    return new article($donnees);
	}

	public function getList()
	{
	        $art = [];

    $q = $this->_db->query('SELECT id_article, id_categorie, id_client, titre, contenu, date FROM article ORDER BY date');

    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
      $art[] = new article($donnees);
    }

    return $art;
	}

	public function update(article $art)
	{
    $q = $this->_db->prepare('UPDATE article SET id_article = :id_article, id_categorie = :id_categorie, id_client = :id_client, titre = :titre, contenu = :contenu, date = :date WHERE id_article = :id_article');

    $q->bindValue(':id_article', $art->id_article());
    $q->bindValue(':id_categorie', $art->id_categorie());
    $q->bindValue(':id_client', $art->id_client());
    $q->bindValue(':titre', $art->titre());
    $q->bindValue(':contenu', $art->contenu());
    $q->bindValue(':date', $art->date());

    $q->execute();
  
	}

	public function setDb(PDO $db)
	{
	    $this->_db = $db;
	}
}





















?>