<?php
    class Mod_Ligue{
        private $cont;
        function __construct(){
            include_once "contLigue.php";
            $this->cont= new ContLigue();
        }

}

?>