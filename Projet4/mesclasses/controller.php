<?php 
	session_start();
	$title = "Connexion";
	include('functions/fonctions.php'); 
	include('mesclasses/connexionBase.php');

	//include('functions/constantes.php'); 
	chargerMesClasses();
	if((!isset($_SESSION['validate_user']) || empty($_SESSION['validate_user'])) && $_GET['Page']!='connexion'&& $_GET['Page']!='inscription'){
		$_POST=[];
		header("Location: index.php?Page=connexion");
	}
	 

	//$db = new Database();

	switch ($_GET['Page']) {

			case 'connexion':
				require('mesclasses/connexionController.php');
				break;
			case 'publication':
				require('mesclasses/publicationController.php');
				break;
			case 'acceuil':
				require('mesclasses/acceuilController.php');
				break;
			case 'inscription':
				require('mesclasses/inscriptionController.php');
				break;
	
			case 'ajoutpub':
				require('mesclasses/ajoutnewpubcontroller.php');
				break;
			case 'voir_plus':
				require('mesclasses/voirpluscontroller.php');
				break;
			default:
				# code...
				break;
		}

	
	//je teste pour le bouton ajouter1pub;
		

	
?>