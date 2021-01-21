<?php
	class ModeleConnexion extends Connexion{
		function __construct(){
		}	
		
		public function Con(){
			$id = $_POST['id'];
			$mdp = hash("haval160,4", $_POST['mdp']);
			try{
				$res = self::$bdd-> prepare("SELECT MDP, Avatar FROM utilisateur where PSEUDO =?;");
				$res->execute(array($id));
				$result = $res->fetch();
				if($mdp == $result['MDP']){
					$_SESSION['id'] = $id;
					$upCo= self::$bdd -> prepare("UPDATE utilisateur SET CONNECTE=1 WHERE PSEUDO=?;");
					$upCo->execute(array($id));
					$_SESSION['avatar']= $result['Avatar'];
					return true;
				}
				return false;
			}
			catch (PDOexception $eo){
				echo $eo.getMessage().$eo.getCode();
			}
		}
		public function deco($id){
			try{
				$downCo= self::$bdd -> prepare("UPDATE utilisateur SET CONNECTE=0 WHERE PSEUDO=?;");
				$downCo->execute(array($id));
			}
			catch (PDOexception $eo){
				echo $eo.getMessage().$eo.getCode();
			}
		}		
	}
?>