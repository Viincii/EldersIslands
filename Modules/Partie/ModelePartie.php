<?php
	class ModelePartie extends Connexion{
		function __construct(){

		}	

		public function infoPV(){
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
		
			return $result;
		}

		
	}

?>