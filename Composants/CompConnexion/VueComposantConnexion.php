<?php 
	class VueComposantConnexion{
		private $menu;
		function __construct(){
			$this->menu = ((!isset($_SESSION['id'])) ? (($_GET['action'] != 'bienvenue' && $_GET['action'] != 'connecte' && $_GET['action'] != 'initIns') ?"<a href=index.php?module=connexion&action=bienvenue>Connexion</a></br>" : '') : "Vous etes connecté sous l'identifiant <a href=index.php?module=profil>".$_SESSION['id']."</a></br>"."<a href=index.php?module=connexion&action=deco>Deconnexion</a></br>");
		}

		function affiche(){
			return $this->menu;
		}
	}
 ?>