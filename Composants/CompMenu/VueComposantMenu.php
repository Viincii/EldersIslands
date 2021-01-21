<?php 
	class VueComposantMenu{
		private $menu;
		function __construct(){
			$this->menu = "<a href=index.php?module=Lore><img class='menu' src='Image/lore.png' alt=''>
			</a><a href=index.php?module=Bestiaire><img class='menu'src='Image/bestiaire.png' alt=''</a>
			<a href=index.php?module=Deck><img class='menu' src='Image/Deck.png' alt=''</a>
			<a href=index.php?module=Jouer><img class='menu' src='Image/Jouer.png' alt=''</a>
			<a href=index.php?module=Ligue><img class='menu' src='Image/ligue.png' alt=''</a>
			<a href=index.php?module=Guilde><img class='menu' src='Image/guilde.png' alt=''</a>
			<a href=index.php?module=Patchs><img class='menu' src='Image/Patch.png' alt=''></a>";
		}

		function affiche(){
			echo $this->menu;
		}
	}
 ?>