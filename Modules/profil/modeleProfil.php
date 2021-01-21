<?php
	class ModeleProfil extends Connexion{
		function __construct(){
		}	
		
		function recupInfo(){
			$pseudo = isset($_SESSION['pseudo'])?$_SESSION['pseudo']:NULL;
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
	}

?>