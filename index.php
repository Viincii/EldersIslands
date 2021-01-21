<?php 
	session_start();
	include_once "connexion.php";
	include_once "Composants/CompConnexion/ComposantConnexion.php";
	include_once "vue_generique.php";

	$co = new Connexion();
	$co->initConnexion();

	if(!isset($_GET['action'])){
        $_GET['action']= 'init';
    }
    if(!isset($_GET['module'])){
        $_GET['module']= 'init';
    }

	
	switch($_GET['module']){
		case 'connexion':
			include_once "Modules/connexion/mod_connexion.php";
			new Mod_Connexion();
			break;
		case 'Bestiaire':
			include_once "Modules/Bestiaire/ModuleBestiaire.php";
			new ModuleBestiaire();
			break;
		case 'inscription':
			include_once "Modules/inscription/mod_inscription.php";
			new Mod_Insription();
		case 'profil':
			include_once "Modules/profil/mod_profil.php";
			new Mod_Profil();	
			break;
		case 'Jouer':
			include_once "Modules/CreerPartie/ModuleCreerPartie.php";
			new ModuleCreerPartie();		
			break;	
		default:
			break;	
	}
				
	include "template.php";
?>	