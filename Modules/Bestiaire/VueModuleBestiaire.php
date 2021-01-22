<?php 
	class VueModuleBestiaire{
		function __construct(){
		}

		function afficheImage($images){
			$pasLeChoix = 0;
			echo "<div id='bestiaire'>";
			for($page=0; $page<2; $page++){
				echo"<div id='page".$page."'>";
					for($ligne=0; $ligne<5; $ligne++){
						for($colonne=0; $colonne<3; $colonne++){
							if(isset($images[$pasLeChoix])){
								echo "<a href=index.php?module=Bestiaire&id=".$images[$pasLeChoix]["IDC"]."><img class='ImageBestiaire' src=".$images[$pasLeChoix]["IMAGE"]."></a>";
								$pasLeChoix++;
							}
						}
						echo "</br>";
					}
				echo "</div>";
			}
			echo "</div>";
		}

		function afficheMob($créa){
			echo "<div id='bestiaire'>
			      <img id='imageCrea' src=".$créa["IMAGE"].">
				  
				  <div id='carac'>
					<p>Rareté :".$créa["ETOILES"]."</p>
					<p>Nom : ".$créa["NOM"]."</p>
					<p>Poids : ".$créa["POIDS"]."</p>
				  </div>

				  <div id='carac2'>
					<p>Taille :".$créa["TAILLE"]."</p>
					<p>Point de Vie : ".$créa["PV"]."</p>
					<p>Attaque : ".$créa["ATK"]."</p>
				  </div>
				  
			      <div id='description'>
			      	<p>".$créa["DESCRIPTION"]."</p>
			      </div>";

			echo "</div>";
		}
	}
 ?>