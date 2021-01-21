<?php 
	class VueComposantMenu{
		private $menu;

		function __construct(){
			$this->affiche();
		}

		function affiche(){
			echo "<div id='blockMenu'>
			<div id='titrePage'>
			<a href='index.php' id='titre'><h1>Elder's Island</h1></a>
			</div>
      		<div class='iconeMenu'><a href=index.php?module=Lore class='lienMenu'><p class='textMenu'>Lore</p></a></div>
			<div class='iconeMenu'><a href=index.php?module=Bestiaire class='lienMenu'><p class='textMenu'>Bestiaire</p></a></div>";
			if(!isset($_SESSION['id'])){
				echo "
				<div class='iconeMenu'><a href='index.php?module=connexion&action=bienvenue' class='lienMenu'><p class='textMenu'>Deck</p></a></div>
		  	<div class='iconeMenu'><a href='index.php?module=connexion&action=bienvenue' class='lienMenu'><p class='textMenu'>Jouer</p></a></div>
			  <div class='iconeMenu'><a href='index.php?module=connexion&action=bienvenue' class='lienMenu'><p class='textMenu'>Ligue</p></a></div>
			  <div class='iconeMenu'><a href='index.php?module=connexion&action=bienvenue' class='lienMenu'><p class='textMenu'>Guilde</p></a></div>
				";
			}else{
				echo "
				<div class='iconeMenu'><a href=index.php?module=Deck class='lienMenu'><p class='textMenu'>Deck</p></a></div>
			<div class='iconeMenu'><a href=index.php?module=Jouer class='lienMenu'><p class='textMenu'>Jouer</p></a></div>
			<div class='iconeMenu'><a href=index.php?module=Ligue class='lienMenu'><p class='textMenu'>Ligue</p></a></div>
			<div class='iconeMenu'><a href=index.php?module=Guilde class='lienMenu'><p class='textMenu'>Guilde</p></a></div>";
			}
				echo "<div class='iconeMenu'><a href=index.php?module=Patchs class='lienMenu'><p class='textMenu'>Patchs</p></a></div></div>";
		}
	}
 ?>