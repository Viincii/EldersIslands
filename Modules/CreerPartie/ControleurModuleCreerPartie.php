<?php 
	class ControleurCreerPartie{
		private $vue;
		private $modele;

		function __construct(){
			include_once "ModeleCreerPartie.php";
			$this->modele = new ModeleCreerPartie();
			include_once "VueModuleCreerPartie.php";
			$this->vue = new VueModuleCreerPartie();
			$this->trieAction();
		}

		function trieAction(){
			if(isset($_GET['action'])){
        		switch($_GET['action']){
					case 'default':
						$this->vue->afficheMenu();
						break;
					case 'CreerPartie':
						$this->modele->créerPartie();
						$this->vue->afficheRejoindrePartie($this->modele->chercherBonnePartie());
						break;
					case 'RecherchePartie':
						$this->vue->affichePartie($this->modele->chercherPartie());
						break;
					case 'LancerPartie':
						$this->modele->lancerPartie($_GET['id']);
						$this->vue->afficheRejoindrePartie($_GET['id']);
						break;
					case 'Partie':
						break;	
					default:
						break;
				}
    		}
		}
	}


 ?>