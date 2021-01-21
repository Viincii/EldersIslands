<?php
	class VueProfil extends VueGenerique{
		function __construct(){
		}
		
		function afficheInfo(){
			$pseudo = isset($_SESSION['pseudo'])?$_SESSION['pseudo']:NULL;
			if ($pseudo != NULL) {
				echo "Utilisateur : ".$_SESSION['pseudo']."<br/>
				Niveau : ".$_POST['niveau']."<br/>
				Points : ".$_POST['points']."<br/>
				NomGuilde : ".$_POST['nomG']."<br/>
				Description Guilde : ".$_POST['descG']."<br/>";
			}
		}
	}
?>