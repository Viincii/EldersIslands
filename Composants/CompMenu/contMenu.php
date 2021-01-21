<?php 
	class contMenu{
		private $vue;
		function __construct(){
			include_once "vueMenu.php";
			$this->vue = new vueMenu();
		}

		function affiche(){
			echo $this->vue->affiche();
		}
	}


 ?>