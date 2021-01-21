<?php
	class VueGuilde{
		function __construct(){
        
        }

        function accueilNonCo(){
            echo "<div id='guilde'><p id='titreG'>Cette page est prévu pour les guildes, vous devez être connecté pour y acceder.</p></div>";
        }

        function afficheGuilde(){
            echo "<div id='guilde'><p id='titreG2'>Bienvenue sur la page de la guilde ".$_POST['nomG'].".</p>
            <p id='desc'> Description :".$_POST['descG']."</p></br><div id='listeMem'>";
            foreach($_POST['listeU'] as $key => $value){
                echo $value[1]."</br>";
            }
            echo "</div></div>";
        }

        function afficheSansGuilde(){
            echo "<div id='guilde'><p id='titreG'> Vous n'avez pas de guilde pour l'instant.</p>
            <a href='index.php?module=Guilde&action=creaGuilde'><button class='boutonGuilde'>Voulez vous créer une guilde?</button></a>
            <a href='index.php?module=Guilde&action=rejoindreGuilde'><button class='boutonGuilde' id='b2'>Où en rejoindre une?</button></div></a>";
        }

        function affListGuilde(){
            echo "<div id='guilde'><p id='titreG2'>Voici la liste des guildes: (cliquez sur une guilde pour la rejoindre) </p></br><div class='listeG'>";
            foreach($_POST['listeG'] as $key => $value){
                echo "<a href='index.php?module=Guilde&action=choixGuilde&choix=".$value[0]."' class='lienG'>".$value[1]." : ".$value[2]."</a></br>";
            }
            echo "</div></div>";
        }

        function formCreation(){
            echo "<div id='guilde'><p id='titreG2'>Formulaire de création de guilde</p>".
                 '<form action="index.php?module=Guilde&action=valCrea" method="post" id="formCreaG">
					<label for="nom">Nom de la guilde :</label><input type="text" name="nom" class="formG"><br>
					<label for="desc">Description :</label><input type="text" name="desc" id="textFormG" size="24"><br>
					<input type="submit" value="Création !" id="boutonCrea">
				    </form></div>';
        }
	}
?>