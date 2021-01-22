<?php
	$test = new PDO("mysql:host=localhost;dbname=elder's island", "root", "");
	$partie = $_POST['ID'];
	
	
	$verif1 = $test->prepare("Select IDD2 from partie where IDP = ?");
	$verif1->execute(array($partie));
	$IDD2 = $verif1->fetch();
	if(isset($IDD2['IDD2'])){
		echo "true";
	} else{
		echo "false";
	}
?>