<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
</head>
<body>
<!-- Header et aside -->
	<!-- Header et aside -->
	<!-- Section -->
	<section>
			<form class="form" method="POST" action="?page=inscription">
			<label>Nom:</label><br/>
			<input type="text" name="nom" required><br/><br/>
			<label>Mot de passe:</label><br/>
			<input type="password" name="motdepasse" required><br/><br/>
			<label>Email:</label><br/>
			<input type="email" name="mail" required><br/><br/>
			<input type="submit" name="insription" value="S'inscrire">
		</form>
	</section>
	<?php
	if (isset($_POST["nom"]) && isset($_POST["motdepasse"]) && isset($_POST["mail"])){
		if (filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {
		$user1 = htmlspecialchars($_POST["nom"]);
		$password = htmlspecialchars(MD5($_POST["motdepasse"]));
		$email= htmlspecialchars($_POST["mail"]);
		$usersquery = new UserManager($bdd);
		$user = $usersquery->userExists($email);
			if ($user == false) {
				$user = $usersquery->createUser($user1, $password, $email);
				header("Location: index.php");
			}else{
				echo "Email déjà renseigné";
			}
		}
		
	}
?>
	<!--Fin de section -->
</body>
</html>
