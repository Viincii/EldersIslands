<?php 
	class VueComposantConnexion{
		private $menu;
		function __construct(){
			$this->menu = ((!isset($_SESSION['id'])) ?
			 (($_GET['action'] != 'bienvenue' && $_GET['action'] != 'connecte' && $_GET['action'] != 'initIns') 
			 ?"<div id='miniProfil'><a href=index.php?module=connexion&action=bienvenue><button class='butP' id='butConn'>Connexion</button></a></br></div>" : '') 
			 :(($_GET['module']!='profil')?"<div id='miniProfil'><a href=index.php?module=profil><img src=".$_SESSION['avatar']." id=miniAvat><div id='miniPseudo'>".$_SESSION['id']."</div></a></br>"."<a href=index.php?module=connexion&action=deco><button class='butP'>Déconnexion</button></a></br></div>":''));
		}

		function affiche(){
			return $this->menu;
		}
	}
 ?>