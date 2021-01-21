<?php
	class ContConnexion{
		private $mod;
		private $vue;
		private $action;
		private $idSession;
		function __construct(){
				include_once "modeleConnexion.php";
				$this->mod = new ModeleConnexion();
				include_once "vueConnexion.php";
				$this->vue = new VueConnexion();
				$this->action = isset($_GET['action'])?$_GET['action']:NULL;
				$this->triAct();
		}	
		
		function triAct(){
			switch($this->action){
				case 'bienvenue':
					$this->vue->bienvenue();
					break;
				case 'connecte':
					$this->idSession = $_POST['id'];
					$i = $this->mod->testCon();
					break;
				case 'deco':
					$id=isset($_SESSION['pseudo'])?$_SESSION['pseudo']:NULL;
					session_unset();
					$this->mod->deco($id);
					break;
				default:
					break;
			}
		}
		public function estCo(){
			if(!isset($_SESSION['pseudo'])&& $this->action == 'connecte'){
				$this->vue->refusCon();
			}
		}

		function getVue(){
			return $this->vue;
		}
	}
?>