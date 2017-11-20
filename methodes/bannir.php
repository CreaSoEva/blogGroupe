<?php
if (isset($_SESSION['id'])) {
	$id = $_GET['id'];
	$user = $_GET['user'];
	$email = $_GET['email'];
	$req = $bdd->prepare('INSERT INTO banni(user, email) VALUES(:user, :email)');
		$req->execute(array(
			'user' => $user,
			'email' => $email
			));
	$bdd->exec(' DELETE from user WHERE id_client= '.$id.' ');
	$_SESSION["resultat"] = "L'élément est bien supprimé.";
	 require_once "./vues/listemembre.php";
}else{
	header("Location: index.php");
}
?>