<?php

//var_dump($_POST);
	require 'fonctions.php';

	if (isset($_POST["connexion"])) {
		$donnees=[];
		$donnees["login"] = $_POST["login"];
		$donnees["mdp"]= $_POST["mdp"];
		$user= new User($donnees);
		if(Fonctions::verifieUser($user)){
			if($_SESSION["CURRENT_USER"]["profil"] == "ADMINISTRATEUR")
				header("Location: index_admin.php");
			else {
				if($_SESSION["CURRENT_USER"]["statu"] == 1)
					header("Location: index_user.php");
				else echo "inscription non validee";
			}
		} else echo "il faut s'inscrire";
	}
	if (isset($_POST["ins"])) {
		$donnees=[];
		$donnees["nom"] = $_POST["nom"];
		$donnees["prenom"] = $_POST["prenom"];
		$donnees["mail"] = $_POST["email"];
		$donnees["tel"] = $_POST["tel"];
		$donnees["login"] = $_POST["login"];
		$donnees["mdp"]= $_POST["mdp"];
		$user=new User($donnees);
		Fonctions::add($user);
		header("Location: index_user.php");
		echo "reussi";
	}
	if (isset($_POST["valider"])) {
		
		validerUser($_POST["id"]);
	}
