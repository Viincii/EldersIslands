<?php 
	class VueModuleTchat{
		function __construct($array){
			echo    "<div id='Tchat'>

						<p>Destinaire</p>
						<input type='text' id='Dest'>

						<p>Sens message to:</p>
						<input type='text' id='Text'>
						<button id='send'>send</button>
					 </div>";			
		}
	}
 ?>