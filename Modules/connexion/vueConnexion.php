<?php
	class VueConnexion extends VueGenerique{
		function __construct(){
		}
		public function form(){
			echo '<form action="index.php?module=connexion&action=connecte" method="post" id="formC">
					<label for="id">Nom d\'utilisateur :</label><input type="text" name="pseudo" class="textForm"><br>
					<label for="mdp">Mot de passe :</label><input type="password" name="mdp" class="textForm" size="24"><br>
					<input type="submit" value="Connexion" id="boutonConnexion">
				</form>
				<p><a href="index.php?module=inscription&action=initIns">Cliquez ici pour vous inscrire</a></p>';
		}
		public function bienvenue(){
			echo "Bienvenue sur la page de connexion<br>";
			$this->form();			
		}
		public function refusCon(){
			echo "L'identifiant ou le mot de passe sont incorrects";
			$this->form();
		}
	}
?>