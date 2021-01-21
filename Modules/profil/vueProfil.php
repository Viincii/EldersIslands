<?php
	class VueProfil extends VueGenerique{
		function __construct(){
		}
		
		function afficheInfo(){
			$pseudo = isset($_SESSION['id'])?$_SESSION['id']:NULL;
			if ($pseudo != NULL) {
				echo "<div id='profil'><img src=".$_SESSION['avatar']." class='imgAvaP'>
					<div id='textP'>".$_SESSION['id']."<br/>
					Niveau : ".$_POST['niveau']."<br/>
					Points : ".$_POST['points']."<br/>";
				if($_POST['nomG']!= NULL){
					echo "NomGuilde : ".$_POST['nomG']."<br/>
					Description Guilde : ".$_POST['descG']."<br/>";
				}
				echo "<a href=index.php?module=profil&action=modif><button class='butP'>Cliquez ici pour changer de mot de passe</button><a/><br/>
					<a href=index.php?module=profil&action=changAva><button class='butP'>Modifier votre avatar</button></a>
					<a href=index.php?module=connexion&action=deco><button class='butP'>Deconnexion</button></a></div></div>";
			}
		}

		function formChangMdp(){
			echo "<div id='formCo'><p class='titre'>Formulaire de changement de mot de passe: </p><br>".
				'<form id="formC" action="index.php?module=profil&action=mdpCh" method="post">
					<label for="aMdp">Ancien mot de passe :</label><input type="password" name="aMdp" id="aMdp" class="textForm"><br>
					<label for="mdp">Nouveau mot de passe :</label><input type="password" name="mdp" id="mdp" class="textForm"><br>
					<label for="cMdp">Confirmation  :</label><input type="password" name="cMdp" id="cMdp" class="textForm"><br>
					<input type="submit" value="Confirmer" id="boutonInscription">
				</form></div>';
		}

		function mdpVal(){
			echo "<div id='formCo'><p id='valMdp'>Mot de passe modifié!</p></div>";
		}

		function pasModif(){
			echo "<div id='formCo'><p id='fauxMdp'>L'ancien mot de passe est faux ou les 2 champs du nouveau mot de passe ne correspondent pas.</p></div>";
		}

		function changAva(){
			echo "<div id='avatars'><div id='textAva'>Selectionez votre avatar :</div>
			<a href='index.php?module=profil&action=choixAvaDone&choix=1'><img src='Image/cat.png' class='imgAva'></a>
			<a href='index.php?module=profil&action=choixAvaDone&choix=2'><img src='Image/cutiehamster.png' class='imgAva'></a>
			<a href='index.php?module=profil&action=choixAvaDone&choix=3'><img src='Image/dog.png' class='imgAva'></a></div>";
		}
	}
?>