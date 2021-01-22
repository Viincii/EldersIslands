<?php
    class ModeleLore extends Connexion {

        public function récupérerPage(){
            try{
                $requeteRecupPage = self::$bdd->prepare("SELECT * from lore;");
                $requeteRecupPage->execute();
                $recupPages=$requeteRecupPage->fetch();
            }catch (PDOexception $eo){
				echo $eo.getMessage().$eo.getCode();
			}
            return $recupPages;
        }

    }

?>