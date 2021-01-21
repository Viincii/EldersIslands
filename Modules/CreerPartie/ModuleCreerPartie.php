<?php
	class ModuleCreerPartie{
		private $cont;

		function __construct(){
			include_once "ControleurModuleCreerPartie.php";
			$this->cont = new ControleurCreerPartie();
		}
	}
?>