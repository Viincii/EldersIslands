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
            $this->idDeckAModif= isset($_GET['idDeck'])?$_GET['idDeck']:NULL;
            $this->triAct();
        }

        function triAct()
        {
            switch ($this->action) {
                case 'init':;
                    $this->mod->contenuListe($this->id);
                    $this->vue->vueDeckBasique();
                    if ($this->mod->existeDeck()) {
                        $this->vue->afficherListeDeck($this->mod->contenuListe($this->id));
                    }
                    break;
                case 'checkBox':
                    $this->vue->checkBoxCrea();
                    break;
                case 'creationDeck':
                    $this->mod->creerDeck($this->id);
                    break;
                case 'Modifier':
                    $this->vue->checkBoxCreaModifDeck($this->id);
                    break;
                case 'modifierDeck':
                    $this->mod->modifierDeck($this->idDeckAModif);
                default:

            }
        }
    }

?>