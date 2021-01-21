<?php
	class ModeleGuilde extends Connexion{
		function __construct(){
		}	
		
		function aUneGuilde(){
            try{
                $requete = self::$bdd->prepare("SELECT IDGuilde FROM utilisateur where PSEUDO=?");
                $requete->execute(array($_SESSION['pseudo']));
                $res = $requete->fetch();
                if($res['IDGuilde']!=NULL){
                    $requeteGuilde= self::$bdd->prepare("SELECT * FROM guilde where IDG=?");
                    $requeteGuilde->execute(array($res['IDGuilde']));
                    $resG = $requeteGuilde->fetch();
                    $_POST['idG'] = $res['IDGuilde'];
                    $_POST['nomG'] = $resG['NOM'];
                    $_POST['descG'] = $resG['DESCRIPTION'];
                    $_POST['IdAdmin'] = $resG['IDADM'];
                    return true;
                }
                else
                    return false;
            }
            catch(PDOException $eo){
                echo $eo.getMessage().$eo.getCode();
            }
        }
        
        function rejoindreGuilde(){
            try{
                $requeteU = self::$bdd->prepare("UPDATE utilisateur SET IDGuilde=? where ID=?;");
                $requeteU->execute(array($_GET['choix'],$_SESSION['id']));
            }
            catch(PDOException $eo){
                echo $eo.getMessage().$eo.getCode();
            }
        }

        function creaGuilde(){
            try{
                $requete = self::$bdd->prepare("INSERT INTO guilde (NOM,DESCRIPTION,IDADM) values (?,?,?);");
                $requete->execute(array($_POST['nom'],$_POST['desc'],$_SESSION['id']));

                $requeteG = self::$bdd->prepare("SELECT IDG FROM guilde WHERE NOM=?;");
                $requeteG->execute(array($_POST['nom']));
                $idG = $requeteG->fetch();
                $requeteU = self::$bdd->prepare("UPDATE utilisateur SET IDGuilde=? where ID=?;");
                $requeteU->execute(array($idG['IDG'],$_SESSION['id']));
            }
            catch(PDOException $eo){
                echo $eo.getMessage().$eo.getCode();
            }
        }
        
        function recupListeGuildes(){
            try{
                $requete =self::$bdd->prepare("SELECT * FROM guilde;");
                $requete->execute();
                $_POST['listeG'] = $requete->fetchAll();
            }
            catch(PDOException $eo){
                echo $eo.getMessage().$eo.getCode();
            }
        }

        function recupMembres(){
            try{
                $requete =self::$bdd->prepare("SELECT * FROM utilisateur WHERE IDGuilde=?;");
                $requete->execute(array($_POST['idG']));
                $_POST['listeU'] = $requete->fetchAll();
            }
            catch(PDOException $eo){
                echo $eo.getMessage().$eo.getCode();
            }
        }
	}
?>