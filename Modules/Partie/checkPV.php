<?php
	try{
		$test = new PDO("mysql:host=localhost;dbname=elder's island", "root", "");
		$partie = $_POST['ID'];
		$idJ = $_POST['IDJ'];
		
		if($idJ==1){
			$verif1 = $test->prepare("Select PVJ1 from partie where IDP = ?");
			$verif1->execute(array($partie));
			$PV = $verif1->fetch();
			echo $PV['PVJ1'];

		}else{
			$verif1 = $test->prepare("Select PVJ2 from partie where IDP = ?");
			$verif1->execute(array($partie));
			$PV = $verif1->fetch();
			echo $PV['PVJ2'];
		}		
	}catch (PDOexception $eo){
		echo $eo.getMessage().$eo.getCode();
	}
?>