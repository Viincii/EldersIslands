<?php
    class ModeleLigue extends Connexion {

        function __construct(){

        }

        public function recupPtsMinetMax($nomLigue){
            try{
                $recupPtsMinetMax= self::$bdd->prepare("SELECT PTMIN,PTMAX from Ligue where NOM = ?;");
                $recupPtsMinetMax->execute(array($nomLigue));
                $recupPtsMinetMax=$recupPtsMinetMax->fetch();

                $joueurAfiches= self::$bdd->prepare("SELECT PSEUDO FROM UTILISATEUR where POINTS BETWEEN ? and ?;");
                $joueurAfiches->execute(array($recupPtsMinetMax['PTMIN'],$recupPtsMinetMax['PTMAX']));
                $lesJoueursDeLaLigue = $joueurAfiches->fetchAll();
            }catch (PDOexception $eo){
				echo $eo.getMessage().$eo.getCode();
			}
            return $lesJoueursDeLaLigue;


        }
    }


?>