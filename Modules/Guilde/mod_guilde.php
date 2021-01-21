<?php
    class Mod_guilde{
        private $cont;

        function __construct(){
            include_once "contGuilde.php";
            $this->cont = new ContGuilde();
        }
    }

?>