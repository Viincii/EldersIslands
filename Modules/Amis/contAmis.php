<?php
	class ContAmis{
		private $mod;
		private $vue;
		private $action;
		function __construct(){
                include_once "modeleAmis.php";
                $this->mod = new ModeleAmis();
                include_once "vueAmis.php";
                $this->vue = new VueAmis();
                $this->action = isset($_GET['amis'])?$_GET['amis']:NULL;
                $id= isset($_SESSION['id'])?$_SESSION['id']!=NULL:NULL;
                if($id)
                    $this->triAct();
        }
        function triAct(){
			switch($this->action){
                case 'init':
                    $this->vue->listeCachée();
                    break;
                case 'show':
                    $this->mod->recupAmis();
                    $this->vue->listeVue();
                    break;
                case 'ajouter':
                    $this->vue->formAjout();
                    break;
                case 'valAjout':
                    $this->mod->ajouterAmi();
                    $this->mod->recupAmis();
                    $this->vue->listeVue();
                    break;
				default:
					break;
			}
		}
    }  
?>