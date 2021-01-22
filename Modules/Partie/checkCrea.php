<?php

	try{
		$test = new PDO("mysql:host=localhost;dbname=elder's island", "root", "");
		$partie = $_POST['ID'];
		$verif1 = $test->prepare("Select TABJ1 from partie where IDP = ?");
		$verif1->execute(array($partie));
		$idP1 = $verif1->fetch();

		$verif2 = $test->prepare("Select TABJ2 from partie where IDP = ?");
		$verif2->execute(array($partie));
		$idP2 = $verif2->fetch();

		$verif3 = $test->prepare("Select * from tableau where IDT = ?");
		$verif3->execute(array($idP1['TABJ1']));
		$Tab1 = $verif3->fetch();
		
		echo "J1A|".$Tab1['CASEA']."|J1B|".$Tab1['CASEB']."|J1C|".$Tab1['CASEC']."|J1D|".$Tab1['CASED']."|J1E|".$Tab1['CASEE']."|J1F|".$Tab1['CASEF']."|J1G|".$Tab1['CASEG']."|J1H|".$Tab1['CASEH'];
	}catch (PDOexception $eo){
		echo $eo.getMessage().$eo.getCode();
	}
?>