<?php 
	class ControleurModuleBestiaire{
		private $vue;
		private $modele;



		function __construct(){
			include_once "VueModuleBestiaire.php";
			$this->vue = new VueModuleBestiaire();
			include_once "ModeleBestiaire.php";
			$this->modele = new ModeleBestiaire();
			$this->trieAction();
		}

		function trieAction(){
			if(!isset($_GET['id'])){
        		$_GET['action']= '0';
        		$this->vue->afficheImage($this->modele->rechercheImageCréa());
    		}

			if(isset($_GET['id'])){
        		$this->vue->afficheMob($this->modele->rechercheCréa($_GET['id']));
    		}
		}
	}


 ?>