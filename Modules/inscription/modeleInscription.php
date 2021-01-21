<?php
	class ModeleInscription extends Connexion{
		function __construct(){
		}	
		
		public function InsertUser(){
			$pseudo = $_POST['pseudo'];
			$mdp =  hash("haval160,4", $_POST['mdp']);
			try{
				$res = self::$bdd->prepare("INSERT INTO utilisateur (PSEUDO, MDP, NIVEAU, POINTS, CONNECTE,Avatar) values (?,?,1,0,0,'Image/cat.png');");
				$res->execute(array($pseudo, $mdp));
			}
			catch (PDOexception $eo){
				echo $eo.getMessage().$eo.getCode();
			}
			
		}

		public function estInscrit(){
			$id = $_POST['pseudo'];
			try{
				$res = self::$bdd-> prepare("SELECT ID FROM utilisateur where PSEUDO =?;");
				$res->execute(array($id));
				$result = $res->fetch();
				if($result == null)
					return false;
				return true;
			}
			catch (PDOexception $eo){
				echo $eo.getMessage().$eo.getCode();
			}
		}

	}
?>