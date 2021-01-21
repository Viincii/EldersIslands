<?php
	$test = new PDO("mysql:host=localhost;dbname=elder's island", "root", "");
	$Env = $_POST['Envo'];
	echo $Env;
	$Dest = $_POST['Dest'];
	echo $Dest;
	$Text = $_POST['Text'];
	echo $Text;


	$test = self::$bdd-> prepare("select ID from utilisateur where pseudo =?;");
	$test->execute(array($_SESSION['id']));
	$test = $test->fetch();
	$res = self::$bdd-> prepare("select Texte from message where IDDest =?;");
	$res->execute(array($test['ID']));
	$result = $res->fetch();
	echo "<p>".$array["Texte"]."</p>";
		
?>