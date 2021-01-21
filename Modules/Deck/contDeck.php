<?php
    class ContDeck extends connexion{
        private $mod;
        private $vue;
        private $action;
        private $id;
        private $idDeckAModif;
        function __construct()
        {
            include_once "modeleDeck.php";
            $this->mod = new modeleDeck();
            include_once "vueDeck.php";
            $this->vue = new vueDeck();
            $this->action=isset($_GET['action'])?$_GET['action']:NULL;
            $this->id = isset($_SESSION['pseudo'])?$_SESSION['pseudo']:NULL;
            $this->idDeckAModif= isset($_POST['idDeck'])?$_POST['idDeck']:NULL;
            $this->triAct();
        }

        function triAct()
        {
            switch ($this->action) {
//                case 'init':
//                    if($_SESSION['pseudo']==null){
//                        $this->vue->vuePasCo();
//                    }
//
//                    break;
                case 'checkBox':
                    $this->vue->checkBoxCrea();
                    break;
                case 'creationDeck':
                    $this->mod->creerDeck($this->id);
                    break;
                case 'checkBoxModif':
                    $this->vue->checkBoxCreaModifDeck();
                    break;
                case 'modifierDeck':
                    $this->mod->modifierDeck($this->idDeckAModif);
                default:
                    $this->vue->vueDeckBasique();
//                    this->vue->afficherListeDeck($this->id);
                    break;
            }
        }
    }

?>