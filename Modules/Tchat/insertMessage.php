<?php
	$test = new PDO("mysql:host=localhost;dbname=elder's island", "root", "");
	$Env = $_POST['Envo'];
	$Dest = $_POST['Dest'];
	$Text = $_POST['Text'];
	
	$requeteID = $test->prepare("Select ID from utilisateur where pseudo = ?");
	$requeteID->execute(array($Dest));
	$resDest = $requeteID->fetch();

	$res = $test->prepare("INSERT INTO `message`(`IDEnv`, `IDDest`, `Texte`, `Dat&Heu`) VALUES (?, ?, ?, '2021-01-13')");
	$res->execute(array($Env, $resDest['ID'], $Text));
?>