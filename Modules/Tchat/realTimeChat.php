<?php
	
	$bd = new PDO("mysql:host=localhost;dbname=elder's island", "root", "");
	$Env = $_POST['Envo'];
	$Dest = $_POST['Dest'];

	$res = $bd-> prepare("select Texte from message where IDDest=? OR IDEnv=? ;");
	$res->execute(array($Env,$Env));
	//header("Content-Type:application/json");
	echo $res->fetchAll();//json_encode($res->fetchAll());
?>