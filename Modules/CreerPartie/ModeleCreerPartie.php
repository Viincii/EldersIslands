<?php
	class ModeleCreerPartie extends Connexion{
		function __construct(){

		}	

		public function créerPartie(){
			try{
				$verif1 = self::$bdd->prepare("Select ID from utilisateur where pseudo = ?");
				$verif1->execute(array($_SESSION['id']));
				$Joueur = $verif1->fetch();
				$res = self::$bdd-> prepare("INSERT INTO `partie`(`IDD1`) VALUES (?)");
				$res->execute(array($Joueur['ID']));
			}

			catch (PDOexception $eo){
				echo $eo.getMessage().$eo.getCode();
			}
		}	

		public function chercherPartie(){
			try{
				$res = self::$bdd-> prepare("select IDP from partie where IDD2 IS NULL;");
				$res->execute();
				$result = $res->fetchAll();
				return $result;
			}

			catch (PDOexception $eo){
				echo $eo.getMessage().$eo.getCode();
			}
		}	

		public function lancerPartie($id){
			try{
				$verif1 = self::$bdd->prepare("Select ID from utilisateur where pseudo = ?");
				$verif1->execute(array($_SESSION['id']));
				$Joueur = $verif1->fetch();
				$res = self::$bdd-> prepare("UPDATE `partie` SET `IDD2`=? WHERE IDP=?");
				$res->execute(array($Joueur['ID'], $id));
			}

			catch (PDOexception $eo){
				echo $eo.getMessage().$eo.getCode();
			}
		}

		public function chercherBonnePartie(){
			try{
				$verif1 = self::$bdd->prepare("Select ID from utilisateur where pseudo = ?");
				$verif1->execute(array($_SESSION['id']));
				$Joueur = $verif1->fetch();
				$res = self::$bdd-> prepare("select IDP from partie where IDD1=? ");
				$res->execute(array($Joueur['ID']));
				$result = $res->fetch();
				return $result['IDP'];
			}

			catch (PDOexception $eo){
				echo $eo.getMessage().$eo.getCode();
			}
		}
	}

?>