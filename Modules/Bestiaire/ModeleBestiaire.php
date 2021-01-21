<?php
	class ModeleBestiaire extends Connexion{
		function __construct(){

		}	
		
		public function rechercheImageCréa(){
			try{

				$res = self::$bdd-> prepare("select IDC, IMAGE from crea;");
				$res->execute();
				$result = $res->fetchAll();
				return $result;
			}

			catch (PDOexception $eo){
				echo $eo.getMessage().$eo.getCode();
			}
		}	

		public function rechercheCréa($id){
			try{
				$res = self::$bdd-> prepare("select * from crea where IDC =?;");
				$res->execute(array($id));
				$result = $res->fetch();
				return $result;
			}

			catch (PDOexception $eo){
				echo $eo.getMessage().$eo.getCode();
			}

		}		
	}

?>