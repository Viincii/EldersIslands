<?php
	class Mod_Connexion{
		private $cont;
		function __construct(){
			include_once "contConnexion.php";
			$this->cont = new ContConnexion();
			$this->cont->estCo();
		}
		function getVue(){
			return $this->cont->getVue();
		}
	}
?>