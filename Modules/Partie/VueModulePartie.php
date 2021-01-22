<?php 
	class VueModulePartie{
		function __construct(){
		}
		
		function afficheJoueur($PVJ){
			echo "<div id='infoJ'>";
			echo "Joueur".$_GET['J']."</br><div id='showPV'><p></p></div></br><div id='showTour'><p></p></div><div id='action'></div>";
			if($_GET["J"]==1){
				echo "<input type='text' id='Joueur' value='1' hidden /><input type='text' id='idPartie' value=".$_GET['id']." hidden />";
			} else{
				echo "<input type='text' id='Joueur' value='2' hidden /><input type='text' id='idPartie' value=".$_GET['id']." hidden />";
			}
			echo "<input type=button id='buttonPV' value='Fin de tour'></div>";	
			$this->afficheTableauAllie();
			$this->afficheTableauEnnemi();
		}

		function afficheTableauAllie(){
			echo "<div id='tableauAllie'>
					<table>
						<tr>
							<td id='J".$_GET['J']."A'><a href=index.php?module=Jouer&action=Partie&id=".$_GET['id']."&J=".$_GET['J']."&case=J".$_GET['J']."-A><button class='choix' value='J".$_GET['J']."A'></button></a></td>
							<td id='J".$_GET['J']."B'><a href=index.php?module=Jouer&action=Partie&id=".$_GET['id']."&J=".$_GET['J']."&case=J".$_GET['J']."-B><button class='choix' value='J".$_GET['J']."B'></button></a></td>
							<td id='J".$_GET['J']."C'><a href=index.php?module=Jouer&action=Partie&id=".$_GET['id']."&J=".$_GET['J']."&case=J".$_GET['J']."-C><button class='choix' value='J".$_GET['J']."C'></button></a></td>
						</tr>
						<tr>
							<td id='J".$_GET['J']."D'><a href=index.php?module=Jouer&action=Partie&id=".$_GET['id']."&J=".$_GET['J']."&case=J".$_GET['J']."-D><button class='choix' value='J".$_GET['J']."D'></button></a></td>
							<td id='J".$_GET['J']."E'><a href=index.php?module=Jouer&action=Partie&id=".$_GET['id']."&J=".$_GET['J']."&case=J".$_GET['J']."-E><button class='choix' value='J".$_GET['J']."E'></button></a></td>
							<td id='J".$_GET['J']."F'><a href=index.php?module=Jouer&action=Partie&id=".$_GET['id']."&J=".$_GET['J']."&case=J".$_GET['J']."-F><button class='choix' value='J".$_GET['J']."F'></button></a></td>
						</tr>
						<tr>
							<td id='J".$_GET['J']."G'><a href=index.php?module=Jouer&action=Partie&id=".$_GET['id']."&J=".$_GET['J']."&case=J".$_GET['J']."-G><button class='choix' value='J".$_GET['J']."G'></button></a></td>
							<td id='nexus'></td>
							<td id='J".$_GET['J']."H'><a href=index.php?module=Jouer&action=Partie&id=".$_GET['id']."&J=".$_GET['J']."&case=J".$_GET['J']."-H><button class='choix' value='J".$_GET['J']."H'></button></a></td>
						</tr>
					</table>
				</div>";
		}

		function afficheTableauEnnemi(){
			$Joueur;
			if($_GET['J']==1){
				$Joueur = 2;
			} else{
				$Joueur = 1;
			}
			echo "<div id='tableauEnnemi'>
					<table>
						<tr>
							<td id='J".$Joueur."A'><a href=index.php?module=Jouer&action=Partie&id=".$_GET['id']."&J=".$_GET['J']."&case=J".$Joueur."-A><button class='choix' value='J".$Joueur."A'></button></a></td>
							<td id='nexus'></td>
							<td id='J".$Joueur."B'><a href=index.php?module=Jouer&action=Partie&id=".$_GET['id']."&J=".$_GET['J']."&case=J".$Joueur."-B><button class='choix' value='J".$Joueur."B'></button></a></td>
						</tr>
						<tr>
							<td id='J".$Joueur."C'><a href=index.php?module=Jouer&action=Partie&id=".$_GET['id']."&J=".$_GET['J']."&case=J".$Joueur."-C><button class='choix' value='J".$Joueur."C'></button></a></td>
							<td id='J".$Joueur."D'><a href=index.php?module=Jouer&action=Partie&id=".$_GET['id']."&J=".$_GET['J']."&case=J".$Joueur."-D><button class='choix' value='J".$Joueur."D'></button></a></td>
							<td id='J".$Joueur."E'><a href=index.php?module=Jouer&action=Partie&id=".$_GET['id']."&J=".$_GET['J']."&case=J".$Joueur."-E><button class='choix' value='J".$Joueur."E'></button></a></td>
						</tr>
						<tr>
							<td id='J".$Joueur."F'><a href=index.php?module=Jouer&action=Partie&id=".$_GET['id']."&J=".$_GET['J']."&case=J".$Joueur."-F><button class='choix' value='J".$Joueur."F'></button></a></td>
							<td id='J".$Joueur."G'><a href=index.php?module=Jouer&action=Partie&id=".$_GET['id']."&J=".$_GET['J']."&case=J".$Joueur."-G><button class='choix' value='J".$Joueur."G'></button></a></td>
							<td id='J".$Joueur."H'><a href=index.php?module=Jouer&action=Partie&id=".$_GET['id']."&J=".$_GET['J']."&case=J".$Joueur."-H><button class='choix' value='J".$Joueur."H'></button></a></td>
						</tr>
					</table>
				</div>";
		}

		public function afficheDeck($liste){
			echo "<div id='showDeck'>";
            foreach ($liste as $k => $v){
				echo "<a href=index.php?module=Jouer&action=Partie&id=".$_GET['id']."&J=".$_GET['J']."&case=".$_GET['case']."&crea=".$v['NOM']."><button id='actionCrea'>".$v['NOM']."</button></a>";
			}
			echo "</div>";
        }
	}
 ?>