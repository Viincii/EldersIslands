<?php
    class vueDeck extends Connexion {
        private $id;
        function __construct(){

        }

        public function checkBoxCrea()
        {
            echo 'Veuillez sélectionner les créatures à ajouter à votre Deck : 
            <form action="index.php?module=Deck&action=creationDeck" method="post">
            <div>
            <input type="checkbox" name = "crea[]" value = "Rem">
                Rem
            </div>

            <div>
            <input type="checkbox" name="crea[]" value = "Vic">
                Vic
            </div>
            
            <div>
            <input type="checkbox" name="crea[]" value = "Jos" >
                Jos
            </div>
            <div>
           <input type = "submit" name="creerDeck" value="Créer le deck">
            </form>
                ';

        }

        public function checkBoxCreaModifDeck()
        {

            echo "Vous allez maintenant devoir reselectionner les créatures que vous souhaitez avoir dans votre deck :";
            echo "<form action=index.php?module=Deck&action=modifierDeck&idDeck=".$_POST['IDD']." method='post'>".
            '<div>
²               <input type="checkbox" name = "crea[]" value = "Rem">
                Rem
            </div>

            <div>
            <input type="checkbox" name="crea[]" value = "Vic">
                Vic
            </div>

            <div>
            <input type="checkbox" name="crea[]" value = "Jos" >
                Jos
            </div>
            <div>
           <input type = "submit" name="modifierDeck" value="Modifier le deck">
            </form>
                ';

        }

        public function vueDeckBasique(){
            echo '<p id="phraseDeck">Voici la page de deck, vous pouvez y voir la liste de vos deck et vous avez la possibilité d\'en créer un nouveau</p>';
            echo '<form action="index.php?module=Deck&action=checkBox" method="post">
                    <input type="submit" name="CreerDeck" value="Créer un deck">
                  </form>';


        }

//        public function vuePasCo(){
//            echo 'Vous ne pouvez pas accèder à cette page en étant pas connecté. Veuillez vous connecter si vous souhaitez avoir accès à l\'ensemble de nos pages !';
//        }

//        public function afficherListeDeck($idUtilisateur){
//
//            $compteurDeck=0;
//
//            foreach ($_POST['contenuListe'] as $k=>$v){
//                $compteurDeck++;
//                $_POST['IDD'] = $v['IDD'];
//                echo "<li>Deck :".$compteurDeck."Créatures :".$v['NOM'].
//                      "<a href=index.php?module=deck&action=modifierDeck&idDeck=".$_POST['IDD']." methods='post'>Modifier le deck<a/>";
//            }
//        }
    }

?>
