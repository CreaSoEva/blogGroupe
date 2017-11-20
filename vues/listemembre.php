<!DOCTYPE html>
<html>
<head>
	<title>Liste des membres</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
</head>
<body>
<!-- Header et aside -->
<?php 
		require_once "./inc/headerconnec.inc.php";
		require_once "./inc/asideconnec.inc.php";
?>
	<!-- Header et aside -->
	<!-- Section -->
	<section>
<?php
	$reponse = $bdd->query('SELECT * FROM user');
	while ($donnees = $reponse->fetch())
	{
?>
    <table>
    	<tr>
    		<th>Id</th>
    		<th>User</th>
    		<th>Mail</th>
    	</tr>
    	<tr>
    		<td><?php echo $donnees['id_client']; ?></td>
    		<td><?php echo $donnees['user']; ?></td>
    		<td><a href="mailto:<?php echo $donnees['email']; ?>"><?php echo $donnees['email']; ?></a></td>
    		<td><input type="button" class="bannir" value="Bannir" data-id="<?php echo $donnees['id_client'];?>" data-user="<?php echo $donnees['user'];?>" data-mail="<?php echo $donnees['email'];?>"></td>
    	</tr>
    </table> 
<?php
	}

	$reponse->closeCursor();
?>
	</section>
	<!--Fin de section -->
	<?php 
	require_once "./inc/footer.inc.php";
?>


</body>
</html>