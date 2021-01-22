<?php
    class modeleDeck extends connexion
    {

        function __construct()
        {

        }

        public function existeDeck(){
            $recupIdUtilisateur = self::$bdd->prepare("SELECT ID FROM UTILISATEUR WHERE PSEUDO = ?;");
            $recupIdUtilisateur->execute(array($_SESSION['pseudo']));
            $id=$recupIdUtilisateur->fetch();

            $requeteExisteDeck= self::$bdd->prepare("SELECT IDD from deck where IDU = ?;");
            $requeteExisteDeck->execute(array($id['ID']));
            $existeDeck = $requeteExisteDeck->fetch();
            if (isset($existeDeck['IDD'])){
                return true;
            }else return false;

        }

        public function creerDeck($pseudo)
        {
            try {

                $recupIdUtilisateur = self::$bdd->prepare("SELECT ID FROM UTILISATEUR WHERE PSEUDO = ?;");
                $recupIdUtilisateur->execute(array($pseudo));
                $id=$recupIdUtilisateur->fetch();


                $creationdeck = self::$bdd->prepare("INSERT INTO deck(IDU) VALUES (?);");
                $creationdeck->execute(array($id['ID']));
                $deck = $creationdeck->fetch();


                $idDeck = self::$bdd->prepare("SELECT IDD from DECK where IDU = ? order by IDD DESC LIMIT 1;");
                $idDeck->execute(array($id['ID']));
                $recupIdDeck = $idDeck->fetch();

                foreach ($_POST['crea'] as $nomCrea) {
                    $recupIdCrea = self::$bdd->prepare("SELECT IDC FROM CREA WHERE NOM = ?;");
                    $recupIdCrea->execute(array($nomCrea));
                    $idCrea = $recupIdCrea->fetch();

                    $ajoutCrea = self::$bdd->prepare("INSERT INTO contient(IDD,IDC) values(?,?);");
                    $ajoutCrea->execute(array($recupIdDeck['IDD'], $idCrea['IDC']));
                }
                echo "Le Deck à été créé avec succès!";

            } catch (PDOException $pdoE) {
                echo $pdoE . getMessage() . $pdoE . getCode();
            }

        }


        public function modifierDeck($idd){
            try {


                $supprimeContenu = self::$bdd->prepare("DELETE FROM CONTIENT WHERE IDD = ?;");
                $supprimeContenu->execute($idd);
                foreach ($_POST['crea'] as $nomCrea) {
                    $recupIdCrea = self::$bdd->prepare("SELECT IDC FROM CREA WHERE NOM = ?;");
                    $recupIdCrea->execute(array($nomCrea));
                    $idCrea = $recupIdCrea->fetch();

                    $ajoutCrea = self::$bdd->prepare("INSERT INTO contient(IDD,IDC) values(?,?);");
                    $ajoutCrea->execute(array($idd, $idCrea['IDC']));
                }
                echo "Le Deck à été modifié avec succès!";
            }catch (PDOException $pdoE){
                echo $pdoE . getMessage() . $pdoE . getCode();
            }
        }

        public function contenuListe($pseudo){
            try {


                $recupIdUtilisateur = self::$bdd->prepare("SELECT ID FROM UTILISATEUR WHERE PSEUDO = ?;");
                $recupIdUtilisateur->execute(array($pseudo));
                $id = $recupIdUtilisateur->fetch();

                $recupListeDeckUtilisateur = self::$bdd->prepare("SELECT IDD FROM DECK WHERE IDU = ?;");
                $recupListeDeckUtilisateur->execute(array($id['ID']));
                $listeDeckUtil = $recupListeDeckUtilisateur->fetch();

                $deckcontient = self::$bdd->prepare("SELECT IDD,NOM FROM CONTIENT NATURAL JOIN CREA WHERE IDD= ? ;");
                $deckcontient->execute(array($listeDeckUtil['IDD']));
                $liste = $deckcontient->fetchAll();
                return $liste;
            }catch (PDOException $pdoE){
                echo $pdoE . getMessage() . $pdoE . getCode();

            }
        }
    }

?>