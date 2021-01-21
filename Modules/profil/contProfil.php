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
				case 'connecte':
					
					break;
				case 'deco':
					
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