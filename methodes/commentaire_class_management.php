<?php 
class CommentaireManager{
	private $_bdd;
    public function __construct($_bdd)
    {
        $this->_bdd = $_bdd;
    }
	public function add($id)
	{
    $q = $this->_bdd->prepare('INSERT INTO commentaire( id_article, auteur, contenu) VALUES(:id_article, :auteur, :contenu)');
    $q->execute(array(
			'id_article' => $id,
			'auteur' => $_SESSION['nom'],
			'contenu' => $_POST["contenu"]
			));

     		$comdonnees = $q->fetch();
            $article = new Commentaire($comdonnees);
            return $article;
	}

    public function compt($id){
         $id = (int) $id;

    $q = $this->_bdd->query('SELECT COUNT(*) FROM commentaire WHERE id_article = '.$id);
    $comdonnees = $q->fetch();

    return $comdonnees;
    }

	public function delete($art)
	{
	    $this->_bdd->exec('DELETE FROM commentaire WHERE id_commentaire = '.$art);
	}

	public function get($id)
	{
	        $id = (int) $id;

    $q = $this->_bdd->query('SELECT * FROM commentaire WHERE id_commentaire = '.$id);
    $comdonnees = $q->fetch();

    return $comdonnees;
	}

	public function getList()
	{
	        $art = [];

    $q = $this->_bdd->query('SELECT * FROM commentaire ORDER BY date DESC LIMIT 3');

    while ($comdonnees = $q->fetch())
    {
      $art[] = new Commentaire($comdonnees);
    }

    return $art;
	}


public function getListclass($url)
	{
	        $art = [];

    $q = $this->_bdd->prepare("SELECT * FROM commentaire WHERE id_article=? ORDER BY date DESC LIMIT 6" );
    $q->execute(array($url));

    while ($comdonnees = $q->fetch())
    {
      $art[] = new Commentaire($comdonnees);
    }

    return $art;
	}
}
?>