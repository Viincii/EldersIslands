<?php
    class ModeleLore extends Connexion {

        public function récupérerPage(){
            $requeteRecupPage = self::$bdd->prepare("SELECT * from lore;");
            $requeteRecupPage->execute();
            $recupPages=$requeteRecupPage->fetch();
            return $recupPages;
        }

    }

?>