<?php
	class ModeleConnexion extends Connexion{
		function __construct(){
		}	
		
		public function Con(){
			$pseudo = $_POST['pseudo'];
			$mdp = hash("haval160,4", $_POST['mdp']);
			try{
				$res = self::$bdd-> prepare("SELECT ID, MDP, Avatar FROM utilisateur where PSEUDO =?;");
				$res->execute(array($pseudo));
				$result = $res->fetch();
				if($mdp == $result['MDP']){
					$_SESSION['pseudo'] = $pseudo;
					$_SESSION['id'] = $result['ID'];
					$upCo= self::$bdd -> prepare("UPDATE utilisateur SET CONNECTE=1 WHERE PSEUDO=?;");
					$upCo->execute(array($pseudo));
					$_SESSION['avatar']= $result['Avatar'];
					return true;
				}
				return false;
			}
			catch (PDOexception $eo){
				echo $eo.getMessage().$eo.getCode();
			}
		}
		public function deco($pseudo){
			try{
				$downCo= self::$bdd -> prepare("UPDATE utilisateur SET CONNECTE=0 WHERE PSEUDO=?;");
				$downCo->execute(array($pseudo));
			}
			catch (PDOexception $eo){
				echo $eo.getMessage().$eo.getCode();
			}
		}		
	}
?>