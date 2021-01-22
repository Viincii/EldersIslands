<?php

    class Mod_Lore{
        private $cont;

        function __construct(){
            include_once "contLore.php";
            $this->cont= new ContLore();
        }


    }

?>