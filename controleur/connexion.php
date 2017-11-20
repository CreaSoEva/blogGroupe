<?php
//on vérifie si les données sont bien renseigner
if (isset($_POST['user']) && isset($_POST['password'])) {
	require_once "./methodes/usermanager.php";
	require_once "./methodes/user.php";
	$usersquery = new UserManager($bdd);
	$user = $usersquery->getUser($_POST['user'], $_POST['password']);
	// si les données sont juste
	if($user){
		$_SESSION['id'] = $user->getIdClient();
		$_SESSION['nom'] = $user->getUser();
		$_SESSION['email'] = $user->getEmail();
		header("Location: index.php");
	}else{
		echo "Les champs renseignés ne sont pas bons";
	}
}else{
	echo "Vous n'avez pas remplis les champs";
}
	
?>