<?php
	class ContInscription{
		private $mod;
		private $vue;
		private $action;
		function __construct(){
			include_once "modeleInscription.php";
			$this->mod = new ModeleInscription();
			include_once "vueInscription.php";
			$this->vue = new VueInscription();
			$this->action = isset($_GET['action'])?$_GET['action']:'initIns';
			$this->triAct();
		}
		function triAct(){
			switch($this->action){
				case 'initIns':
					$this->vue->form();
					break;
				case 'inscri':
					if(!$this->mod->estInscrit())
						$this->mod->InsertUser();
					else
						$this->vue->DejaIns();
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