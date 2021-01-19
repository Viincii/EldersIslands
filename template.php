<html>
	<head>
		<meta charset="utf-8"/>
        <link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php
			$co = new ComposantConnexion();
			$co->affiche();
		?>
		<div id='Titre'>
			<a href='index.php' id='titrePage'><h1>Elder's Island</h1></a>
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