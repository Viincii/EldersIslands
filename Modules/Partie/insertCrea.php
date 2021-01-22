<?php
	try{
		$test = new PDO("mysql:host=localhost;dbname=elder's island", "root", "");
		$partie = $_POST['ID'];

	}catch (PDOexception $eo){
		echo $eo.getMessage().$eo.getCode();
	}
?>