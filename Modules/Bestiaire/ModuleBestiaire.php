<?php
	class ModuleBestiaire{
		private $cont;

		function __construct(){
			include_once "ControleurModuleBestiaire.php";
			$this->cont = new ControleurModuleBestiaire();
		}

		function affiche(){
			$this->cont->affiche();
		}
	}
?>