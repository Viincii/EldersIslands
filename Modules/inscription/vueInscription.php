<?php
	class VueInscription{
		function __construct(){
		}
		public function form(){
			echo "<div id ='formCo'><p class='titre'>Formulaire d'inscription: </p><br>".
				'<form id="formC" action="index.php?module=inscription&action=inscri" method="post">
					<label for="id">Nom d\'utilisateur :</label><input type="text" name="pseudo" class="textForm"><br>
					<label for="mdp">Mot de passe :</label><input type="password" name="mdp" class="textForm" ><br>
					<input type="submit" value="Inscription" id="boutonInscription">
				</form></div>';
		}

		public function DejaIns(){
			echo "Le nom d'utilisateur est déjà utilisé.</br>" ;
		}
	}
?>