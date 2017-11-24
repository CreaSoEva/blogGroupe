<header>
		<a href="?page="><img src="./image/banniere.png" class="imageheaderG"></a>
		<a href="?page="><img src="./image/logo.png" class="imageheaderP"></a>
		<?php
			if (isset($_SESSION['id'])){
		?>
		<p>Bonjour <br/><span><?php echo $_SESSION['nom']; ?></span><br/><br/>
		<button><a href="?page=deconnexion">Déconnexion</a></button></p>
		<?php
			}else{
		?>
		<ul>
			<form method="POST" action="?page=connexion">
			<li><input type="email" name="email" placeholder="Email"></li>
			<li><input type="password" name="password" placeholder="Password"></li>
			<li><button>Connexion</button></li><br/>
			</form>
			<li>Pas encore inscrit?</li>
			<li><button><a href="?page=inscription">Inscription</a></button></li>
		</ul>
		<?php
			}
		?>
</header>