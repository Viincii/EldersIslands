<?php
	try{
		$test = new PDO("mysql:host=localhost;dbname=elder's island", "root", "");
		$idJoueur = $_POST['ID'];

		$verif1 = $test->prepare("select * from partie where IDD1=? and FIN IS NOT NULL");
		$verif1->execute(array($idJoueur));
		$verif = $verif1->fetch();

		if(isset($verif1)){
			echo "index.php?module=Jouer&action=Partie&id=".$verif['IDP']."&J=1";
		} else{
			$verif2 = $test->prepare("select * from partie where IDD2=? and FIN IS NOT NULL");
			$verif2->execute(array($idJoueur));
			$verif = $verif2->fetch();

			if(isset($verif2)){
				echo "index.php?module=Jouer&action=Partie&id=".$verif['IDP']."&J=2";
			}
		}
	}catch (PDOexception $eo){
		echo $eo.getMessage().$eo.getCode();
	}
?>