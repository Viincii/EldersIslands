<?php 
	class ControleurComposantConnexion{
		private $vue;
		function __construct(){
			include_once "vueComposantConnexion.php";
			$this->vue = new vueComposantConnexion();
		}

		function affiche(){
			echo $this->vue->affiche();
		}
	}


 ?>