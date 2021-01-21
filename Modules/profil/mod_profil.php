<?php
	class Mod_Profil{
		private $cont;
		function __construct(){
			include_once "contProfil.php";
			$this->cont = new ContProfil();
		}
		/*function getVue(){
			return $this->cont->getVue();
		}*/
	}
?>