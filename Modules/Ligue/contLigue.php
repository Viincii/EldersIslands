<?php
    class contLigue{
        private $mod;
        private $vue;
        private $action;
        private $nomLigue;
        function __construct(){
            include_once "modeleLigue.php";
            $this->mod= new ModeleLigue();
            include_once "vueLigue.php";
            $this->vue = new VueLigue();
            $this->action = isset($_GET['action'])?$_GET['action']:NULL;
            $this->nomLigue = isset($_GET['nomLigue'])?$_GET['nomLigue']:NULL;
            $this->triAction();

        }

        function triAction(){
            switch ($this->action){
                case 'init':
                    $this->vue->vueBasique();
                    break;
                case 'afficherClassement':

                    $this->mod->recupPtsMinetMax($this->nomLigue);
                    $this->vue->AfficherListeJoueurLigue($this->nomLigue,$this->mod->recupPtsMinetMax($this->nomLigue));
                    break;

            }
        }
    }
?>