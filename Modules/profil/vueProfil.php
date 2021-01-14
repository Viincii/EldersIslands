<?php
	class VueProfil extends VueGenerique{
		function __construct(){
		}
		
		function afficheInfo(){
			$pseudo = isset($_SESSION['id'])?$_SESSION['id']:NULL;
			if ($pseudo != NULL) {
				echo "Utilisateur : ".$_SESSION['id']."<br/>
				Niveau : ".$_POST['niveau']."<br/>
				Points : ".$_POST['points']."<br/>
				NomGuilde : ".$_POST['nomG']."<br/>
				Description Guilde : ".$_POST['descG']."<br/>";
			}
		}
	}
?>