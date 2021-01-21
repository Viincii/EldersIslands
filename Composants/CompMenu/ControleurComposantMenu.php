<?php 
	class ControleurComposantMenu{
		private $vue;
		function __construct(){
			include_once "vueComposantMenu.php";
			$this->vue = new vueComposantMenu();
		}

		function affiche(){
			echo $this->vue->affiche();
		}
	}


 ?>