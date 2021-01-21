<?php
	$test = new PDO("mysql:host=localhost;dbname=elder's island", "root", "");
	$Env = $_POST['Envo'];
	echo $Env;
	$Dest = $_POST['Dest'];
	echo $Dest;
	$Text = $_POST['Text'];
	echo $Text;


	$verif1 = $test->prepare("Select ID from utilisateur where pseudo = ?");
	$verif1->execute(array($Env));
	$Env = $verif1->fetch();
	echo($Env['ID']);
	
	$verif2 = $test->prepare("Select ID from utilisateur where pseudo = ?");
	$verif2->execute(array($Dest));
	$Dest = $verif2->fetch();
	echo($Dest['ID']);

	$res = $test->prepare("INSERT INTO `message`(`IDEnv`, `IDDest`, `Texte`, `Dat&Heu`, `Guilde`, `Partie`) VALUES (?, ?, ?, '2021-01-13', '0', '0')");
	$res->execute(array($Env['ID'], $Dest['ID'], $Text));
		
?>