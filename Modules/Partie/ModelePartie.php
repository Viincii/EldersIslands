<?php
	class ModelePartie extends Connexion{
		function __construct(){
			if(!$this->checkTableau()){
				$this->creerPlateau();
				$this->ajouterTableau();
			}
		}	

		public function infoPV(){
			try{
				if($_GET['J'] == 1){
					$res = self::$bdd-> prepare("select PVJ1 from partie where IDP=? ");
					$res->execute(array($_GET['id']));
					$result = $res->fetch();
					$result = $result['PVJ1'];
				}else{
					$res = self::$bdd-> prepare("select PVJ2 from partie where IDP=? ");
					$res->execute(array($_GET['id']));
					$result = $res->fetch();
					$result = $result['PVJ2'];
				}
			}catch (PDOexception $eo){
				echo $eo.getMessage().$eo.getCode();
			}
		
			return $result;
		}

		public function creerPlateau(){
			try{
				$verif1 = self::$bdd->prepare("Select ID from utilisateur where pseudo = ?");
				$verif1->execute(array($_SESSION['pseudo']));
				$Joueur = $verif1->fetch();

				$res = self::$bdd->prepare("INSERT INTO `tableau`(`ID`) VALUES (?)");
				$res->execute(array($Joueur['ID']));
			}catch (PDOexception $eo){
				echo $eo.getMessage().$eo.getCode();
			}
		}

		public function checkTableau(){
			try{
				$verif1 = self::$bdd->prepare("Select ID from utilisateur where pseudo = ?");
				$verif1->execute(array($_SESSION['pseudo']));
				$Joueur = $verif1->fetch();

				$res = self::$bdd->prepare("Select ID from tableau where ID = ?");
				$res->execute(array($Joueur['ID']));
				$all = $res->fetch();
			}catch (PDOexception $eo){
				echo $eo.getMessage().$eo.getCode();
			}

			if(isset($all['ID'])){
				return true;
			} else{
				return false;
			}
		}

		public function ajouterTableau(){
			try{
				$verif1 = self::$bdd->prepare("Select ID from utilisateur where pseudo = ?");
				$verif1->execute(array($_SESSION['pseudo']));
				$Joueur = $verif1->fetch();
			
				$res = self::$bdd->prepare("Select IDT from tableau where ID = ?");
				$res->execute(array($Joueur['ID']));
				$all = $res->fetch();
				if($_GET['J']==1){
					$res = self::$bdd->prepare("UPDATE `partie` SET `TABJ1` = ? WHERE IDP=?");
					$res->execute(array($all['IDT'], $_GET['id']));
				} else{
					$res = self::$bdd->prepare("UPDATE `partie` SET `TABJ2` = ? WHERE IDP=?");
					$res->execute(array($all['IDT'], $_GET['id']));
				}
			}catch (PDOexception $eo){
				echo $eo.getMessage().$eo.getCode();
			}
		}

		public function contenuListe(){
			try{
				$recupIdUtilisateur = self::$bdd->prepare("SELECT ID, DECKC FROM UTILISATEUR WHERE PSEUDO = ?;");
				$recupIdUtilisateur->execute(array($_SESSION['pseudo']));
				$id=$recupIdUtilisateur->fetch();
				
				$recupListeDeckUtilisateur = self::$bdd->prepare("SELECT IDD FROM DECK WHERE IDU = ? and IDD=?;");
				$recupListeDeckUtilisateur->execute(array($id['ID'], $id['DECKC']));
				$listeDeckUtil=$recupListeDeckUtilisateur->fetch();

				$deckcontient = self::$bdd->prepare("SELECT NOM FROM CONTIENT NATURAL JOIN CREA WHERE IDD= ? ;");
				$deckcontient->execute(array($listeDeckUtil['IDD']));
				$liste = $deckcontient->fetchAll();
			}catch (PDOexception $eo){
				echo $eo.getMessage().$eo.getCode();
			}
            return $liste;
		}
		
		public function inserCreaTab(){
			try{
				$verif1 = self::$bdd->prepare("Select ID from utilisateur where pseudo = ?;");
				$verif1->execute(array($_SESSION['pseudo']));
				$Joueur = $verif1->fetch();

				$verif2 = self::$bdd->prepare("Select IDC from crea where NOM = ?;");
				$verif2->execute(array($_GET['crea']));
				$crea = $verif2->fetch();
			
				$all = explode('-', $_GET['case']);
				
				if($all[0]=="J1"){
					$verif3 = self::$bdd->prepare("Select TABJ1 from partie where IDP = ?;");
					$verif3->execute(array($_GET['id']));
					$idTab = $verif3->fetch();
					$idTab = $idTab['TABJ1'];
				}else{
					$verif3 = self::$bdd->prepare("Select TABJ2 from partie where IDP = ?;");
					$verif3->execute(array($_GET['id']));
					$idTab = $verif3->fetch();
					$idTab = $idTab['TABJ2'];
				}
				$verif4 = self::$bdd->prepare("UPDATE `tableau` SET `CASE".$all[1]."`=? WHERE IDT=?;");
				$verif4 -> execute(array($crea['IDC'], $idTab));
			}catch (PDOexception $eo){
				echo $eo.getMessage().$eo.getCode();
			}
		}
	}

?>