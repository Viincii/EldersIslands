<?php
	class ContProfil{
		private $mod;
		private $vue;
		private $action;
		private $idSession;
		function __construct(){
				include_once "modeleProfil.php";
				$this->mod = new ModeleProfil();
				include_once "vueProfil.php";
				$this->vue = new VueProfil();
				$this->action = isset($_GET['action'])?$_GET['action']:NULL;
				$this->triAct();
		}	
		
		function triAct(){
			switch($this->action){
				case 'init':
					$this->mod->recupInfo();
					$this->vue->afficheInfo();
					break;
				case 'modif':
					$this->vue->formChangMdp();
					break;
				case 'mdpCh':
					$res = $this->mod->changMdp();
					if($res == 0)
						$this->vue->mdpVal();
					else
						$this->vue->pasModif();
					break;
				default:
					break;
			}
		}
		

		function getVue(){
			return $this->vue;
		}
	}
?>