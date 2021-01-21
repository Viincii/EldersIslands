<?php
	class Mod_Insription{
		private $cont;
		function __construct(){
			include_once "contInscription.php";
			$this->cont = new ContInscription();
		}
		function getVue(){
			return $this->cont->getVue();
		}
	}
?>