<?php
	$test = new PDO("mysql:host=localhost;dbname=elder's island", "root", "");
	$verif1 = $test->prepare("select IDD1 from partie where IDD1=?");
	$verif1->execute();

	if(isset($verif1)){
		$verif2 = $test->prepare("DELETE FROM `partie` WHERE FIN=1");
		$verif2->execute();
	}*/
?>