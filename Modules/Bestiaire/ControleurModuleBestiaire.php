<?php 
	class ControleurModuleBestiaire{
		private $vue;
		private $modele;
		function __construct(){
			include_once "VueModuleBestiaire.php";
			$this->vue = new VueModuleBestiaire();
			include_once "ModeleBestiaire.php";
			$this->modele = new ModeleBestiaire();
			$this->vue->afficheImage($this->modele->rechercheImageCréa());
		}

		function affiche(){
			echo $this->vue->affiche();
		}
	}


 ?>