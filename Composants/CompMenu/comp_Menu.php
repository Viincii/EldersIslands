<?php
	class comp_Menu{
		private $cont;
		function __construct(){
			include_once "contMenu.php";
			$this->cont = new contMenu();
		}

		function affiche(){
			$this->cont->affiche();
		}
	}
?>