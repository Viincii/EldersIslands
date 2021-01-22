<?php
	class ModeleAmis extends Connexion{
		function __construct(){
		}	
		
		function ajouterAmi(){
            $pseudo =isset($_POST['pseudoAmi'])?$_POST['pseudoAmi']:NULL;
            if($pseudo!=NULL)
                try{
                    $requeteUtilisateur = self::$bdd->prepare("SELECT ID FROM utilisateur where PSEUDO=?");
                    $requeteUtilisateur->execute(array($_POST['pseudoAmi']));

                    $idA = $requeteUtilisateur->fetch()['ID'];
                    $requeteAjout = self::$bdd->prepare("INSERT INTO amis values (?,?);");
                    $requeteAjout->execute(array($_SESSION['id'], $idA));
                    $requeteAjout2 = self::$bdd->prepare("INSERT INTO amis values (?,?);");
                    $requeteAjout2->execute(array($idA,$_SESSION['id']));
                }
                catch (PDOexception $eo){
                    echo $eo.getMessage().$eo.getCode();
                }
		}

		function recupAmis(){
			try{
                $requeteAmis = self::$bdd->prepare("SELECT IDJ2 as ID from amis where IDJ1=?");
                $requeteAmis->execute(array($_SESSION['id']));
                $listeId= $requeteAmis->fetchAll();
                $listeNom = array();
                foreach($listeId as $k => $v){
                    $requeteUtilisateur = self::$bdd->prepare("SELECT PSEUDO FROM utilisateur where ID=?");
                    $requeteUtilisateur->execute(array($v[0]));
                    $nom = $requeteUtilisateur->fetch();
                    array_push($listeNom,$nom);
                }
                $_POST['lAmis'] = $listeNom;
			}
			catch (PDOexception $eo){
				echo $eo.getMessage().$eo.getCode();
			}		
		}
	}

?>