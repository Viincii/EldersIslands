<?php
	class ModuleTchat{
		private $cont;

		function __construct(){
			include_once "ControleurModuleTchat.php";
			$this->cont = new ControleurModuleTchat();
		}
	}
?>