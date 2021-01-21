<?php 
	class vueMenu{
		private $menu;
		function __construct(){
			$this->menu = ((!isset($_SESSION['pseudo'])) ? (($_GET['action'] != 'bienvenue' && $_GET['action'] != 'connecte' && $_GET['action'] != 'initIns' ) ?"<a href=index.php?act=connexion&action=bienvenue>Connexion</a><br>" : '') : "Vous etes connecté sous l'identifiant ".$_SESSION['pseudo']."<br>"."<a href=index.php?act=connexion&action=deco>Deconnexion</a> <br>
				</nav>");
		}

		function affiche(){
			return $this->menu;
		}
	}
 ?>