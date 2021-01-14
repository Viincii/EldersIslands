<html>
	<head>
		<meta charset="utf-8"/>
        <link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div id='Titre'>
			<h1>Elder's Island</h1>
		</div>

		<div id='test'>
			<?php
				$co = new ComposantConnexion();
				$co->affiche();
			?>
		</div>

		<div id='menu'>
			<?php
				include_once "Composants/CompMenu/ComposantMenu.php";
				$menu = new ComposantMenu();
				$menu->affiche();
			?>
		</div>
		<main>
				
		</main>
	</body>
</html>