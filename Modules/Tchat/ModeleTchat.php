<?php
	class ModeleTchat extends Connexion{
		function __construct(){

		}	
		
		public function rechercheMessage(){
			$test = self::$bdd-> prepare("select ID from utilisateur where pseudo =?;");
			$test->execute(array($_SESSION['id']));
			$test = $test->fetch();
			$res = self::$bdd-> prepare("select Texte from message where IDDest =?;");
			$res->execute(array($test['ID']));
			$result = $res->fetch();
			return $result;	
		}		
	}

?>