<html>
	<head>
		<meta charset="utf-8"/>
        <link rel="stylesheet" href="style.css">
	</head>	
	<body>
		<div id='Titre'>
			<h1>Elder's Island</h1>
		</div>

		<div id='menu'>
			<?php
				include_once "Composants/CompMenu/ComposantMenu.php";
				$menu = new ComposantMenu();
				$menu->affiche();
			?>
		</div>

		<div id='test'>
			<?php
				$co = new ComposantConnexion();
				$co->affiche();
			?>
		</div>
		<main>
		</main>
			<?php
				if(isset($_SESSION['id'])){
					include_once "Modules/Tchat/ModuleTchat.php";
					$mess = new ModuleTchat();
				}
			?>
	</body>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="Tchat.js"></script>
</html>