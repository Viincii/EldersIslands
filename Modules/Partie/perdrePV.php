<?php
	try{
		$test = new PDO("mysql:host=localhost;dbname=elder's island", "root", "");
		$partie = $_POST['ID'];
		$idJ = $_POST['IDJ'];
		
		if($idJ==1){
			$verif1 = $test->prepare("Select PVJ2 from partie where IDP = ?");
			$verif1->execute(array($partie));
			$PV = $verif1->fetch();
			$res = $test-> prepare("UPDATE `partie` SET `PVJ2`=? WHERE IDP=?");
			$res->execute(array($PV['PVJ2']-10, $partie));
			$res2 = $test-> prepare("UPDATE `partie` SET `TOUR`=2 WHERE IDP=?");
			$res2->execute(array($partie));
		}else{
			$verif1 = $test->prepare("Select PVJ1 from partie where IDP = ?");
			$verif1->execute(array($partie));
			$PV = $verif1->fetch();
			$res = $test-> prepare("UPDATE `partie` SET `PVJ1`=? WHERE IDP=?");
			$res->execute(array($PV['PVJ1']-10, $partie));
			$res2 = $test-> prepare("UPDATE `partie` SET `TOUR`=1 WHERE IDP=?");
			$res2->execute(array($partie));
		}		
	}catch (PDOexception $eo){
		echo $eo.getMessage().$eo.getCode();
	}
?>