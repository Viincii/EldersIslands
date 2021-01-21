<?php
	class VueGuilde{
		function __construct(){
        
        }

        function accueilNonCo(){
            echo "<div id='guilde><p id='accNonCo'>Cette page est prévu pour les guildes, vous devez être connectés pour y acceder.</p></div>";
        }

        function afficheGuilde(){
            echo "<div id='guilde><h1 id='titreG'>Bienvenue sur la page de la guilde ".$_POST['nomG'].".</h1>
            <p> Description :".$_POST['descG']."</br>";
            foreach($_POST['listeU'] as $key => $value){
                echo $value[1]."</br>";
            }
            echo "</div>";
        }

        function afficheSansGuilde(){
            echo "<div id='guilde'><p> Vous n'avez pas de guilde pour l'instant</p>
            <a href='index.php?module=Guilde&action=creaGuilde'><button>Voulez vous créer une guilde?</button></a>
            <a href='index.php?module=Guilde&action=rejoindreGuilde'><button>Où en rejoindre une?</button></div></a>";
        }

        function affListGuilde(){
            echo "<div id='guilde'>Ici sera la liste des guildes</br>";
            foreach($_POST['listeG'] as $key => $value){
                echo "<a href='index.php?module=Guilde&action=choixGuilde&choix=".$value[0]."'>".$value[1]." : ".$value[2]."</a>";
            }
            echo "</div>";
        }

        function formCreation(){
            echo "<div id='guilde'>Formulaire de création".
                 '<form action="index.php?module=Guilde&action=valCrea" method="post" id="formCreaG">
					<label for="nom">Nom de la guilde :</label><input type="text" name="nom" class="formG"><br>
					<label for="desc">Description :</label><input type="text" name="desc" id="textFormG" size="24"><br>
					<input type="submit" value="Création!" id="boutonCrea">
				    </form></div>';
        }
	}
?>