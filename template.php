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