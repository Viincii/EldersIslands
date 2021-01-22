<?php
    class VueLigue{
        function __construct(){
        }



        public function vueBasique(){
            echo "<div id='textLigue'>";
            echo "Voici la page de ligue, Veuillez selectionnez la ligue dont vous souhaitez connaitre le classement : ";
            echo "</div>";
            $this->afficherListe();
        }

        public function afficherListe(){
            echo "<div id='listeLigue'>";
            echo "<a class='lienGuilde' href=index.php?module=Ligue&action=afficherClassement&nomLigue=Bronze>Bronze</a>".
                 "<a class='lienGuilde' href=index.php?module=Ligue&action=afficherClassement&nomLigue=Argent>Argent</a>".
                 "<a class='lienGuilde' href=index.php?module=Ligue&action=afficherClassement&nomLigue=Or>Or</a>".
                 "<a class='lienGuilde' href=index.php?module=Ligue&action=afficherClassement&nomLigue=Platine>Platine</a>".
                 "<a class='lienGuilde' href=index.php?module=Ligue&action=afficherClassement&nomLigue=Diamant>Diamant</a>".
                 "<a class='lienGuilde' href=index.php?module=Ligue&action=afficherClassement&nomLigue=Maitre>Maitre</a>";
            echo "</div>";
        }

        public function AfficherListeJoueurLigue($nomLigue,$lesJoueursDeLaLigue){
            echo "<div id='listeJo'>";
            echo "<p>Les joueurs présent dans la ligue : ".$nomLigue."</p>";
            foreach ($lesJoueursDeLaLigue as $k=>$v){
                echo "<li>".$v['PSEUDO']."</li>";
            }
            echo "</div>";
        }
    }

?>