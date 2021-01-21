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
				Description Guilde : ".$_POST['descG']."<br/>
				<a href=index.php?module=profil&action=modif>Cliquez ici pour changer de mot de passe<a/>";
			}
		}

		function formChangMdp(){
			echo "<p>Formulaire de changement de mot de passe: </p><br>".
				'<form action="index.php?module=profil&action=mdpCh" method="post">
					<label for="aMdp">Ancien mot de passe :</label><input type="password" name="aMdp" id="aMdp"><br>
					<label for="mdp">Nouveau mot de passe :</label><input type="password" name="mdp" id="mdp" size="24"><br>
					<label for="cMdp">Confirmation du mot de passe :</label><input type="password" name="cMdp" id="cMdp" size="24"><br>
					<input type="submit" value="Confirmer">
				</form>';
		}

		function mdpVal(){
			echo 'Mot de passe modifié!';
		}

		function pasModif(){
			echo "L'ancien mot de passe est faux ou les 2 champs du nouveau mot de passe ne correspondent pas.";
		}
	}
?>