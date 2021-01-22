<?php 
	class ControleurPartie{
		private $vue;
		private $modele;

		function __construct(){
			include_once "ModelePartie.php";
			$this->modele = new ModelePartie();
			include_once "VueModulePartie.php";
			$this->vue = new VueModulePartie();
			$this->trieAffichage();
			$this->trieChoix();
		}

		function trieAffichage(){
			switch($_GET['J']){
				case '1':
					$this->vue->afficheJoueur($this->modele->infoPV());	
					break;
				case '2':
					$this->vue->afficheJoueur($this->modele->infoPV());
					break;
				default:
					break;
			}
		}

		function trieChoix(){
			if(isset($_GET['case']) && isset($_GET['crea'])){
				$this->modele->inserCreaTab();
				return ;
			}

			if(isset($_GET['case'])){
				$this->vue->afficheDeck($this->modele->contenuListe());
				return;
			}

		}

	}


 ?>