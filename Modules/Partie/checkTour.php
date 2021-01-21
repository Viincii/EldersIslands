<?php
	$test = new PDO("mysql:host=localhost;dbname=elder's island", "root", "");
	$partie = $_POST['ID'];
	$res = $test-> prepare("select TOUR from partie where IDP=? ");
	$res->execute(array($partie));
	$result = $res->fetch();
	$result = $result['TOUR'];		
	echo $result;
?>