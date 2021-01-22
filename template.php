<html>
	<head>
		<meta charset="utf-8"/>
        <link rel="stylesheet" href="style.css">
	</head>	
	<body>
		<?php
			if(isset($_SESSION['id'])){
				echo "<input type='text' id='idJoueur' value=".$_SESSION['id']." hidden />";
			}	
			if(isset($_GET['Dest']))
				echo "<input type='text' id='Dest' value=".$_GET['Dest']." hidden />";
		?>
		<div id='menu'>
			<?php
				if($_GET['module']!="Jouer"){
					include_once "Composants/CompMenu/ComposantMenu.php";
					new ComposantMenu();
				}
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
					new ModuleTchat();
				}
			?>
	</body>
	<script src="jquery-3.5.1.min.js"></script>
	<script src="Tchat.js"></script>
	<script src="Modules/Partie/Script.js"></script>
</html>