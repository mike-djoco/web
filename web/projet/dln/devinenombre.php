<?php
	session_start();

	if (!isset($_SESSION['dvin'])) {
		$_SESSION['dvin'] = rand(1, 100);
		$_SESSION['chance'] = 5;
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>MDD | Devine le Nombre</title>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1" name="viewport" />
		<link rel="stylesheet" href="./css/devinenombre.css">
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
						<a data-text="&nbsp;Projet" href="/projet.html" >&nbsp;Projet&nbsp;</a>
					</li>
				</ul>
			</div>
		</header>

		<div class="s1">
			<p class="tittle">Devine le Nombre</p>
			<div class="container">
				<div class="rep">
				<?php
					if(isset($_GET['number'])){
						if ($_SESSION['chance']>0) {
							$rep = intval($_GET['number']);
							if ($rep < $_SESSION['dvin']) {
								$mes = "Trop Petit reasayer, il vous reste ".$_SESSION['chance']." chance";
								$_SESSION['chance']--;
								echo "<p id='mes'>".$mes."<p>";
								echo "<form method='GET'><input type='texte=' id='number' name='number' placeholder='nombre entre 1 et 100'/><input type='submit' value='envoie'></form>";
							}else if ($rep > $_SESSION['dvin']) {
								$mes = "Trop Grand reasayer, il vous reste ".$_SESSION['chance']." chance";
								$_SESSION['chance']--;
								echo "<p id='mes'>".$mes."<p>";
								echo "<form method='GET'><input type='texte=' id='number' name='number' placeholder='nombre entre 1 et 100'/><input type='submit' value='envoie'></form>";
							}else if ($rep == $_SESSION['dvin']) {
								$nbcoup=5-$_SESSION['chance'];
								$mes = "Vous avez gagner en ".$nbcoup." essaies";
								echo "<p id='mes'>".$mes."<p>";
								echo "<input type='button' onclick='parent.location='devinenombre.php'' value='Rejouer'>";
								session_destroy();
							}
						}else {
							$mes = "Vous avez Perdu le nombre a deviné était ".$_SESSION['dvin'];
							echo "<p id='mes'>".$mes."<p>";
							echo "<input type='button' onclick='parent.location='devinenombre.php'' value='Rejouer'>";
							session_destroy();
						}
					}
					else{
						$mes = "Pouvez vous choisir un nombre";
						echo "<p id='mes'>".$mes."<p>";
						echo "<form method='GET'><input type='texte=' id='number' name='number' placeholder='nombre entre 1 et 100'/><input type='submit' value='envoie'></form>";
					}
				?>
				</div>

			</div>
		</div>
	</body>
</html>