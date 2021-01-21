<?php
	class VueAmis{
		function __construct(){
        
        }

        function listeCachée(){
            if($_SERVER['REQUEST_URI']=='/EldersIslands/'||$_SERVER['REQUEST_URI']=='/EldersIslands/index.php')
                echo "<a href='index.php?amis=show'><div id='listeC'></div></a>";
            else
                echo "<a href='".$_SERVER['REQUEST_URI']."&amis=show'><div id='listeC'></div></a>";
        }

        function listeVue(){
            echo "<div id='listeAmis'><p id='titreLA'>Liste d'amis :</p><div class='listeA'>";
            foreach($_POST['lAmis'] as $key => $value){
                echo "<p class='amis'>".$value[0]."</p>";
            }
            echo "</div>";
            if($_SERVER['REQUEST_URI']=='/EldersIslands/'||$_SERVER['REQUEST_URI']=='/EldersIslands/index.php')
                echo "<a href='index.php?amis=ajouter'><button id='ajoutA'>Ajouter un ami !</button></a>";
            else
                echo "<a href='".$_SERVER['REQUEST_URI']."&amis=ajouter'><button id='ajoutA'>Ajouter un ami</button></a>";
            echo "</div>";
            if($_SERVER['REQUEST_URI']=='/EldersIslands/'||$_SERVER['REQUEST_URI']=='/EldersIslands/index.php')
                echo "<a href='index.php?amis=init'><div id='listeApparente'></div></a>";
            else
                echo "<a href='".$_SERVER['REQUEST_URI']."&amis=init'><div id='listeApparente'></div></a>";
        }

        function formAjout(){
            echo '<div id="listeAmis">';
            if($_SERVER['REQUEST_URI']=='/EldersIslands/'||$_SERVER['REQUEST_URI']=='/EldersIslands/index.php')
                echo "<form action='index.php?amis=valAjout' method='post'id=''>
                <label for='pseudo'>Entrez le pseudo du joueur (il ne sera pas ajouté si le compte c'est pas créé) :</label><input type='text' name='pseudoAmi'><br>
                <input type='submit' value='Ajoutez' id='boutonAjout'>
                </form>
                <a href='index.php?amis=init'><div id='listeApparente'></div></a>";
            else
                echo "<form action='".$_SERVER['REQUEST_URI']."&amis=valAjout' method='post'id=''>
                <label for='pseudo'>Entrez le pseudo du joueur :</label><input type='text' name='pseudoAmi'><br>
                <input type='submit' value='Ajoutez' id='boutonAjout'>
                </form>
                <a href='".$_SERVER['REQUEST_URI']."&amis=init'><div id='listeApparente'></div></a>";
            
            echo '</div>';
        }
	}
?>