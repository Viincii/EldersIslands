<?php 
	class VueModuleCreerPartie{
		function __construct(){
		}

		function afficheMenu(){
			echo "<div id='menuJeu'><a class='lienJeu' href=index.php?module=Jouer&action=CreerPartie>Créer Partie</a>
				  <a class='lienJeu' href=index.php?module=Jouer&action=RecherchePartie>Recherche Partie</a>
				  </div>";

		}

		function affichePartie($liste){
			echo "<div id='listePartie'>";
					foreach ($liste as $k => $v) {
						echo "<div id='Partie'><a class='lienJeu' href=index.php?module=Jouer&action=LancerPartie&id=".$v['IDP'].">Partie N°".$v['IDP']."</a></div>";
					}
			echo "</div>";
		}

		function afficheRejoindrePartie($id, $numéroJoeur){
			echo "<div id='bouton'><a class='lienJeu'href=index.php?module=Jouer&action=Partie&id=".$id."&J=".$numéroJoeur.">Rejoindre Partie</a></div>";
		}
	}
 ?>