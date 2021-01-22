<?php
    class vueDeck extends Connexion {
        private $id;
        function __construct(){

        }

        public function checkBoxCrea()
        {
            echo "<div id='formCo'>";
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
           </div>
            </form>
             </div>   ';

        }

        public function checkBoxCreaModifDeck($id)
        {
            echo "<div id='formCo'>";
            echo "Vous allez maintenant devoir reselectionner les créatures que vous souhaitez avoir dans votre deck :";
            echo "<form action=index.php?module=Deck&action=modifierDeck&idDeck=".$id." method='post'>".
            '<div>
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
           <input type = "submit" name="modifierDeck" value="Modifier le deck">
           </div>
            </form>
            </div>';

        }

        public function vueDeckBasique(){
            echo '<div id="formCo"><p id="phraseDeck">Voici la page de deck, vous pouvez y voir la liste de vos deck et vous avez la possibilité d\'en créer un nouveau</p>';
            echo '<form action="index.php?module=Deck&action=checkBox" method="post">
                    <input  id="boutonCrea" type="submit" name="CreerDeck" value="Créer un deck">
                  </form>';


        }

        public function afficherListeDeck($liste){

            $compteurDeck=0;
            $compteurDeck++;
            echo "Deck : ".$compteurDeck." Créatures :";
            foreach ($liste as $k=>$v){
                $compteurDeck++;
                echo $v['NOM'].",";
            }
            echo '<form action=index.php?module=Deck&action=checkBoxModif&idDeck='.$v['IDD'].'method = "post">
            <input id="boutonCrea" type = "submit" name="modifierDeck" value="Modifier">
            
            </form></div>
            ';
        }
        public function finVueBasique(){
            echo '</div>';
        }
    }

?>
