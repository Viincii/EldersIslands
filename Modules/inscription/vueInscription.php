<?php
	class VueInscription{
		function __construct(){
		}
		public function form(){
			echo "<p>Formulaire d'inscription: </p><br>".
				'<form action="index.php?module=inscription&action=inscri" method="post">
					<label for="id">Nom d\'utilisateur :</label><input type="text" name="pseudo" id="pseudo"><br>
					<label for="mdp">Mot de passe :</label><input type="password" name="mdp" id="mdp" size="24"><br>
					<input type="submit" value="Inscription">
				</form>';
		}

		public function DejaIns(){
			echo "Le nom d'utilisateur est déjà utilisé.</br>" ;
		}
	}
?>