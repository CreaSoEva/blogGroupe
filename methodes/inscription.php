<?php
	if (isset($_POST["nom"]) && isset($_POST["motdepasse"]) && isset($_POST["mail"])){
		$nom = $_POST["nom"];
		$password = MD5($_POST["motdepasse"]);
		$email= $_POST["mail"];
		$req = $bdd->prepare('INSERT INTO bloggroupe(user, password, email) VALUES(:user, :password, :email)');
		$req->execute(array(
			'user' => $nom,
			'password' => $password,
			'email' => $email,
			));
		echo "reussi";
	}else{
		echo "erreur";
	}
?>