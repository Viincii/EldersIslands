<?php
	class ModeleProfil extends Connexion{
		function __construct(){
		}	
		
		function recupInfo(){
			$pseudo = isset($_SESSION['id'])?$_SESSION['id']:NULL;
			if ($pseudo != NULL) {
				try{
					$res = self::$bdd-> prepare("SELECT NIVEAU,POINTS, IDGuilde FROM utilisateur where PSEUDO =?;");
					$res->execute(array($pseudo));
					$result = $res->fetch();
					$_POST['niveau'] = $result['NIVEAU'];
					$_POST['points'] = $result['POINTS'];
					$IDG =$result['IDGuilde'];
					if($IDG!= NULL){
						$res = self::$bdd-> prepare("SELECT NOM, DESCRIPTION FROM guilde where IDG =?;");
						$res->execute(array($IDG));
						$resultTemp = $res->fetch();
						$_POST['nomG'] = $resultTemp['NOM'];
						$_POST['descG'] = $resultTemp['DESCRIPTION'];
					}
					else{
						$_POST['nomG'] = NULL;
						$_POST['descG'] = NULL;
					}	
				}
				catch (PDOexception $eo){
					echo $eo.getMessage().$eo.getCode();
				}

			}
		}

		function changMdp(){
			$aMdp = hash("haval160,4", $_POST['aMdp']);
			$mdp = $_POST['mdp'];
			$cMdp = $_POST['cMdp'];
			if($mdp!=$cMdp)
				return 1;
			$mdp= hash("haval160,4", $mdp);

			$pseudo = isset($_SESSION['id'])?$_SESSION['id']:NULL;
			if ($pseudo != NULL) {
				try{
					$res = self::$bdd-> prepare("SELECT MDP FROM utilisateur where PSEUDO =?;");
					$res->execute(array($pseudo));
					$result = $res->fetch();
					if($aMdp!=$result['MDP'])
						return 1;
					$res = self::$bdd-> prepare("UPDATE utilisateur set MDP=? where PSEUDO =?;");
					$res->execute(array($mdp,$pseudo));
					return 0;
				}
				catch (PDOexception $eo){
					echo $eo.getMessage().$eo.getCode();
				}
			}
		}
	}

?>