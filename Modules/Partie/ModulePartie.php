<?php
	class ModulePartie{
		private $cont;

		function __construct(){
			include_once "ControleurModulePartie.php";
			$this->cont = new ControleurPartie();
		}
	}
?>