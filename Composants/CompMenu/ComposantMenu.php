<?php
	class ComposantMenu{
		private $cont;
		function __construct(){
			include_once "ControleurComposantMenu.php";
			$this->cont = new ControleurComposantMenu();
		}

		function affiche(){
			$this->cont->affiche();
		}
	}
?>