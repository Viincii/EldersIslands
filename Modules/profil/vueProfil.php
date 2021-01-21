<?php
	class VueProfil extends VueGenerique{
		function __construct(){
		}
		
		function afficheInfo(){
			$pseudo = isset($_SESSION['pseudo'])?$_SESSION['pseudo']:NULL;
			if ($pseudo != NULL) {
				echo "<div id='profil'><img src=".$_SESSION['avatar']." class='imgAvaP'>
					<div id='textP'>".$_SESSION['pseudo']."<br/>
					Niveau : ".$_POST['niveau']."<br/>
					Points : ".$_POST['points']."<br/>";
				if($_POST['nomG']!= NULL){
					echo "Guilde : ".$_POST['nomG']."<br/>";
				}
				echo "<a href=index.php?module=profil&action=modif><button class='butP'>Cliquez ici pour changer de mot de passe</button><a/><br/>
					<a href=index.php?module=profil&action=changAva><button class='butP'>Modifier votre avatar</button></a>
					<a href=index.php?module=connexion&action=deco><button class='butP'>Deconnexion</button></a></div></div>";
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