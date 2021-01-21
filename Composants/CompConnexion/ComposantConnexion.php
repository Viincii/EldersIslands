<?php
	class ComposantConnexion{
		private $cont;
		function __construct(){
			include_once "ControleurComposantConnexion.php";
			$this->cont = new ControleurComposantConnexion();
		}

		function affiche(){
			$this->cont->affiche();
		}
	}
?>