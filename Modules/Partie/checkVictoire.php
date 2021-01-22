<?php
	try{
		$test = new PDO("mysql:host=localhost;dbname=elder's island", "root", "");
		$partie = $_POST['ID'];
		
		$verif1 = $test->prepare("Select * from partie where IDP = ?");
		$verif1->execute(array($partie));
		$all = $verif1->fetch();

		if($all['PVJ2']<=0 && $all['FIN']!=1){
			$verif2 = $test->prepare("Select NIVEAU from utilisateur where ID = ?");
			$verif2->execute(array($all['IDD1']));
			$Niveau=$verif2->fetch();

			$verif3 = $test->prepare("Select POINTS from utilisateur where ID = ?");
			$verif3->execute(array($all['IDD1']));
			$Points = $verif3->fetch();

			$verif4  = $test->prepare("UPDATE `utilisateur` SET `NIVEAU`=?,`POINTS`=? WHERE ID=?");
			$verif4->execute(array($Niveau['NIVEAU']+1, $Points['POINTS']+10, $all['IDD1']));


			$verif5 = $test->prepare("Select POINTS from utilisateur where ID = ?");
			$verif5->execute(array($all['IDD2']));
			$Points2=$verif5->fetch();

			$verif6 = $test->prepare("UPDATE `utilisateur` SET `POINTS`=? WHERE ID=?");
			$verif6->execute(array($Points2['POINTS']-10, $all['IDD2']));

			$verif7 = $test->prepare("UPDATE `partie` SET `FIN`=1 WHERE IDP=?");
			$verif7->execute(array($partie));

			$verif8 = $test->prepare("DELETE FROM `tableau` WHERE ID=?");
			$verif8->execute(array($all['IDD1']));

			$verif9 = $test->prepare("DELETE FROM `tableau` WHERE ID=?");
			$verif9->execute(array($all['IDD2']));

			echo 0;
			return;
		}
		
		if($all['PVJ1']<=0 && $all['FIN']!=1){
			$verif2 = $test->prepare("Select NIVEAU from utilisateur where ID = ?");
			$verif2->execute(array($all['IDD2']));
			$Niveau=$verif2->fetch();

			$verif3 = $test->prepare("Select POINTS from utilisateur where ID = ?");
			$verif3->execute(array($all['IDD2']));
			$Points=$verif3->fetch();

			$verif4 = $test->prepare("UPDATE `utilisateur` SET `NIVEAU`=?,`POINTS`=? WHERE ID=?");
			$verif4->execute(array($Niveau['NIVEAU']+1, $Points['POINTS']+10, $all['IDD2']));

			$verif5 = $test->prepare("Select POINTS from utilisateur where ID = ?");
			$verif5->execute(array($all['IDD1']));
			$Points2=$verif4->fetch();

			$verif6 = $test->prepare("UPDATE `utilisateur` SET `POINTS`=? WHERE ID=?");
			$verif6->execute(array($Points2['POINTS']-10, $all['IDD1']));

			$verif7 = $test->prepare("UPDATE `partie` SET `FIN`=1 WHERE IDP=?");
			$verif7->execute(array($partie));

			$verif8 = $test->prepare("DELETE FROM `tableau` WHERE ID=?");
			$verif8->execute(array($all['IDD1']));

			$verif9 = $test->prepare("DELETE FROM `tableau` WHERE ID=?");
			$verif9->execute(array($all['IDD2']));

			echo 0;
			return;
		}
	
	if($all['FIN']!=1){
		echo 1;
	}

	}catch (PDOexception $eo){
		echo $eo.getMessage().$eo.getCode();
	}
?>