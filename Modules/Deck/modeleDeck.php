<?php
    class modeleDeck extends connexion
    {

        function __construct()
        {

        }

//        public function recupérationIdJoueur($pseudo){
//            try {
//                $recupIdUtilisateur = self::$bdd->prepare("SELECT ID FROM UTILISATEUR WHERE PSEUDO = ?;");
//                $recupIdUtilisateur->execute(array($pseudo));
//                $recupIdUtilisateur->fetch();
//            }catch (PDOException $pdoE){
//                echo $pdoE . getMessage() . $pdoE . getCode();
//            }
//        }
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

        public function listeDeck($pseudo){
            try {
                $recupIdUtilisateur = self::$bdd->prepare("SELECT ID FROM UTILISATEUR WHERE PSEUDO = ?;");
                $recupIdUtilisateur->execute(array($pseudo));
                $id=$recupIdUtilisateur->fetch();

                $recupListeDeck = self::$bdd->prepare("SELECT IDC from deck where IDU = ?;");
                $recupListeDeck->execute(array($id['ID']));
                $nombreDeck = $recupListeDeck->fetch();

            }catch (PDOException$pdoE){
                echo $pdoE . getMessage() . $pdoE . getCode();
            }

            return $nombreDeck;
        }

        public function contenuDeck($idd){
            $deckcontient = self::$bdd->prepare("select IDD,IDC,IDU,NOM FROM deck NATURAL JOIN contient NATURAL JOIN crea ");
            $deckcontient->execute(array($idd));
            $contenuDeck = $deckcontient->fetch();

//            $contenuDecknom = self::$bdd->prepare("SELECT NOM FROM CREA WHERE IDC = ?");
//            $contenuDecknom ->execute(array($contenuDeck['IDC']));
//            $contenuDeckCréa = $contenuDecknom->fetch();
            return $contenuDeck;
        }

        public function modifierDeck($idd){
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
        }

        public function contenuListe($idUtilisateur){

            $deckcontient = self::$bdd->prepare("select IDD,IDC,IDU,NOM FROM deck NATURAL JOIN contient NATURAL JOIN crea where IDU=?");
            $deckcontient->execute(array($idUtilisateur));
            $contenuListe = $deckcontient->fetchAll();
            $_POST['contenuListe'] = $contenuListe;

        }
    }

?>