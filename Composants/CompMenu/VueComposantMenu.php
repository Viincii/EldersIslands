<?php 
	class VueComposantMenu{
		private $menu;
		function __construct(){
			$this->menu = "<div id='blockMenu'>
			<div id='titrePage'>
			<a href='index.php' id='titre'><h1>Elder's Island</h1></a>
			</div>
			<div class='iconeMenu'><a href=index.php?module=Lore class='lienMenu'><p class='textMenu'>Lore</p></a></div>
			<div class='iconeMenu'><a href=index.php?module=Bestiaire class='lienMenu'><p class='textMenu'>Bestiaire</p></a></div>
			<div class='iconeMenu'><a href=index.php?module=Deck class='lienMenu'><p class='textMenu'>Deck</p></a></div>
			<div class='iconeMenu'><a href=index.php?module=Jouer class='lienMenu'><p class='textMenu'>Jouer</p></a></div>
			<div class='iconeMenu'><a href=index.php?module=Ligue class='lienMenu'><p class='textMenu'>Ligue</p></a></div>
			<div class='iconeMenu'><a href=index.php?module=Guilde class='lienMenu'><p class='textMenu'>Guilde</p></a></div>
			<div class='iconeMenu'><a href=index.php?module=Patchs class='lienMenu'><p class='textMenu'>Patchs</p></a></div></div>";
		}

		function affiche(){
			echo $this->menu;
		}
	}
 ?>