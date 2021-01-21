<?php 
	class VueModuleCreerPartie{
		function __construct(){
		}

		function afficheMenu(){
			echo "<a href=index.php?module=Jouer&action=CreerPartie>Créer Partie</a>
				  <a href=index.php?module=Jouer&action=RecherchePartie>Recherche Partie</a>";
		}

		function affichePartie($liste){
			echo "<div id='listePartie'>";
					foreach ($liste as $k => $v) {
						echo "<div id='Partie'><a href=index.php?module=Jouer&action=LancerPartie&id=".$v['IDP'].">Partie N°".$v['IDP']."</a></div>";
					}
			echo "</div>";
		}

		function afficheRejoindrePartie($id){
			echo "<div id='bouton'><a href=index.php?module=Jouer&action=Partie&id=".$id.">Rejoindre Partie</a>";
		}
	}
 ?>