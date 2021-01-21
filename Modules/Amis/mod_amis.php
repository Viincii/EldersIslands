<?php
    class Mod_amis{
        private $cont;

        function __construct(){
            include_once "contAmis.php";
            $this->cont = new ContAmis();
        }
    }

?>