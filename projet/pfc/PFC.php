<?php
	include 'include/jeu.php';
	// variable de la vue definies par le controleur
	// $coup_[joueur|oridnateur]
	// $image_[joueur|ordinateur]
	// $message 
	// $vue booleen pour affichage si un coup a été joué
?>

<!DOCTYPE html>
<html>
	<head>
		<title>MDD ~ P F C</title>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1" name="viewport" />
		<link rel="stylesheet" href="./css/pfc.css">
		<link rel="icon" type="image/png" sizes="16x16" href="/image/logo.png">
	</head>
	
	<body style="--bck:#d4d4d4;--bck2:#E9DECB; --tclr:#2c2c2c;">
		<header>
			<div class="container">
				<div class="logo">
					<a href="/index.html"><img src="/image/logo.png" /></a>
				</div>
				<ul class="navbarhead, navbar">
					<li>
						<a data-text="&nbsp;WEB_Index" href="/projet/projectindex.html" >&nbsp;WEB_Index&nbsp;</a>
					</li>
				</ul>
			</div>
		</header>

		<div class="s1">
			<p class="tittle">Pierre Feuille Ciseau</p>
			<div class="container">
				<!-- PHP Choix -->
					<?php if ($vue==FALSE): ?>
					<p class="question">Choisisez votre coup :</p>
					<div class="imagechoose">
						<a href="?coup=0">
							<img width="150px" src="./img/P.png">
							<p>Pierre</p>
						</a>
						<a href="?coup=1">
							<img width="150px" src="./img/F.png">
							<p>Feuille</p>
						</a>
						<a href="?coup=2">
							<img width="150px" src="./img/C.png">
							<p>Ciseaux</p>
						</a>
					</div>
					<?php endif; ?>
				<!-- PHP Choix -->


				<!-- PHP resultat -->
					<?php if ($vue): ?>
					<h5 class="<?php echo $class ?>"><?php echo $message ?></h5>
					<div class="imagechoose">
						<div>
							<img width="150px" src="./img/<?php echo $images_joueur ?>">
							<p>Joueur</p>
						</div>
						<div>
							<img width="150px" src="./img/<?php echo $images_ordinateur ?>">
							<p>Ordinateur</p>
						</div>
					</div>
					<a id="rematch" href="./PFC.php">Rejouer</a>
					<?php endif; ?>
				<!-- PHP resultat -->
			</div>
		</div>
	</body>
</html>