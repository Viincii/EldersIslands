<?php

    class ContLore{
        private $mod;
        private $vue;
        function __construct(){

            include_once "modeleLore.php";
            $this->mod = new ModeleLore();
            include_once "vueLore.php";
            $this->vue = new VueLore();
            $this->affichage();

        }

        function affichage(){
                $this->mod->récupérerPage();
                $this->vue->affichageLore($this->mod->récupérerPage());
        }


    }

?>