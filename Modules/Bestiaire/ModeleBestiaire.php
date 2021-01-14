<?php
	class ModeleBestiaire extends Connexion{
		function __construct(){

		}	
		
		public function rechercheImageCréa(){
			try{
				$res = self::$bdd-> prepare("select IMAGE from crea;");
				$res->execute();
				$result = $res->fetchAll();
				return $result;
			}

			catch (PDOexception $eo){
				echo $eo.getMessage().$eo.getCode();
			}
		}		
	}

?>