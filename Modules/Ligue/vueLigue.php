<?php
    class VueLigue{
        function __construct(){
        }



        public function vueBasique(){
            echo "Voici la page de ligue, Veuillez selectionnez la ligue dont vous souhaitez connaitre le classement : ";
            $this->afficherListe();
        }

        public function afficherListe(){
            echo "<li><a href=index.php?module=Ligue&action=afficherClassement&nomLigue=Bronze>Bronze</a></li>".
                 "<li><a href=index.php?module=Ligue&action=afficherClassement&nomLigue=Argent>Argent</a></li>".
                 "<li><a href=index.php?module=Ligue&action=afficherClassement&nomLigue=Or>Or</a></li>".
                 "<li><a href=index.php?module=Ligue&action=afficherClassement&nomLigue=Platine>Platine</a></li>".
                 "<li><a href=index.php?module=Ligue&action=afficherClassement&nomLigue=Diamant>Diamant</a></li>".
                 "<li><a href=index.php?module=Ligue&action=afficherClassement&nomLigue=Maitre>Maitre</a></li>";
        }

        public function AfficherListeJoueurLigue($nomLigue,$lesJoueursDeLaLigue){
            echo "<p>Les joueurs présent dans la ligue : ".$nomLigue."</p>";
            foreach ($lesJoueursDeLaLigue as $k=>$v){
                echo "<li>".$v['PSEUDO']."</li>";
            }
        }
    }

?>