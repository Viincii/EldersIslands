<?php 
	class VueModuleTchat{
		function __construct($array){
			echo    "<div id='Tchat'>
						<input type='text' id='Envo' value=".$_SESSION['id']." hidden />

						<p>Destinaire</p>
						<input type='text' id='Dest'>

						<p>Sens message to:</p>
						<input type='text' id='Text'>
						<button id='send'>send</button>
					 </div>";			
		}
	}
 ?>