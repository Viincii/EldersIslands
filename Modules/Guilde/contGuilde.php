<?php
	class ContGuilde{
		private $mod;
		private $vue;
		private $action;
		function __construct(){
                include_once "modeleGuilde.php";
                $this->mod = new ModeleGuilde();
                include_once "vueGuilde.php";
                $this->vue = new VueGuilde();
				$this->action = isset($_GET['action'])?$_GET['action']:NULL;
				$this->triAct();
        }
        
        function triAct(){
            $id = isset($_SESSION['id'])?$_SESSION['id']:NULL;
			switch($this->action){
                case 'init':
                    if($id==NULL)
                        $this->vue->accueilNonCo(); 
                    else if($this->mod->aUneGuilde()){
                        $this->mod->recupMembres();
                        $this->vue->afficheGuilde();  
                    }
                    else{
                        $this->vue->afficheSansGuilde();
                    }
                        break;
                case 'creaGuilde':
                    $this->vue->formCreation();
                    break;
                case 'valCrea':
                    $this->mod->creaGuilde();
                    if($this->mod->aUneGuilde()){
                        $this->mod->recupMembres();
                        $this->vue->afficheGuilde();  
                    }
                    break;
                case 'rejoindreGuilde':
                    $this->mod->recupListeGuildes();
                    $this->vue->affListGuilde();
                    break;
                case 'choixGuilde':
                    $this->mod->rejoindreGuilde();
                    if($this->mod->aUneGuilde()){
                        $this->mod->recupMembres();
                        $this->vue->afficheGuilde();  
                    }
                    break;
				default:
					break;
			}
		}
    }  
?>