<?php 
	class VueModulePartie{
		function __construct(){
		}
		
		function afficheJoueur($PVJ){
			echo "Joueur".$_GET['J']."</br><div id='showPV'><p></p></div></br><div id='showTour'><p></p></div><div id='action'></div>";
			if($_GET["J"]==1){
				echo "<input type='text' id='Joueur' value='1' hidden /><input type='text' id='idPartie' value=".$_GET['id']." hidden />";
			} else{
				echo "<input type='text' id='Joueur' value='2' hidden /><input type='text' id='idPartie' value=".$_GET['id']." hidden />";
			}
			echo "<input type=button id='buttonPV' value='test'>";	
		}

		function afficheTableau(){
			echo "
			<table>
   				<tr>
      				<td>Carmen</td>
      			 	<td>33 ans</td>
       			 	<td>Espagne</td>
   				</tr>
  				<tr>
       				<td>Michelle</td>
       				<td>26 ans</td>
       				<td>États-Unis</td>
  				</tr>
			</table>
			";
		}
	}
 ?>