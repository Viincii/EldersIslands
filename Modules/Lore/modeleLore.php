<?php
    class ModeleLore extends Connexion {

        public function récupérerPage(){
            try {


                $requeteRecupPage = self::$bdd->prepare("SELECT * from lore;");
                $requeteRecupPage->execute();
                $recupPages=$requeteRecupPage->fetch();
                return $recupPages;

            }catch (PDOException $pdoE){
                echo $pdoE . getMessage() . $pdoE . getCode();
            }
        }

    }

?>