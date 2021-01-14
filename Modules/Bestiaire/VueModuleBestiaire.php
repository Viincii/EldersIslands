<?php 
	class VueModuleBestiaire{
		function __construct(){
		}

		function afficheImage($images){
			foreach($images as $values => $test){
				echo "<img class='ImageBestiaire' src=".$test["IMAGE"].">";
			}

		}
	}
 ?>