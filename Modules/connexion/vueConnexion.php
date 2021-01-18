<?php
	class VueConnexion extends VueGenerique{
		function __construct(){
		}
		public function form(){
			echo '<form action="index.php?module=connexion&action=connecte" method="post" id="formC">
					<label for="id">Nom d\'utilisateur :</label><input type="text" name="id" class="textForm"><br>
					<label for="mdp">Mot de passe :</label><input type="password" name="mdp" class="textForm" size="24"><br>
					<input type="submit" value="Connexion" id="boutonConnexion">
				</form>
				<a href="index.php?module=inscription&action=initIns"><button id="boutonInscription">Cliquez ici pour vous inscrire</button></a></div>';
		}
		public function bienvenue(){
			echo "<div id ='formCo'><div class='titre'>Bienvenue sur la page de connexion</div><br>";
			$this->form();			
		}
		public function refusCon(){
			echo "<div id ='formCo'>L'identifiant ou le mot de passe sont incorrects";
			$this->form();
		}
	}
?>