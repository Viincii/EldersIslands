<?php
    class mod_deck{
        private $cont;
        function __construct()
        {
            include_once "contDeck.php";
            $this->cont = new ContDeck();
        }
}
?>