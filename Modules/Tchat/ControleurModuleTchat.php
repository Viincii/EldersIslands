<?php 
	class ControleurModuleTchat{
		private $vue;
		private $modele;

		function __construct(){
			include_once "ModeleTchat.php";
			$this->modele = new ModeleTchat();
			include_once "VueModuleTchat.php";
			$this->vue = new VueModuleTchat($this->modele->rechercheMessage());
		}
	}


?>