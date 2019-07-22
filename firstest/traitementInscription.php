<?php 
require_once('verificationInsertion.php');
	$nom=$_POST['nom'];//var_dump($nom);
	$prenom=$_POST['prenom'];//var_dump($prenom);
	$email=$_POST['email'];//var_dump($email);
	$tel=$_POST['tel'];//var_dump($tel);
	$login=$_POST['login'];//var_dump($login);
	$mdp=$_POST['mdp'];//var_dump($mdp);
	$profil=$_POST['profil'];
	$statu=1;
	if(Verification(array($nom,$prenom,$email,$tel,$login,$mdp,$profil)))
	{
		if (!VerificationLoginExist($login)) {
			if($profil=="UTILISATEUR SIMPLE"){
				$statu=0;
				echo "Ajouter en tant qu' UTILISATEUR SIMPLE\n";
			}
	 		InsertionBDD($nom,$prenom,$email,$tel,$login,$mdp,$profil,$statu);
	 		echo "Inscription réussi";
	 	}
	 	else{
	 	echo "Le login existe deja Veuillez choisir un autre login";
	 	}
	}
	else
	{
		echo "Un champ  dans votre formulaire est vide";
	}

	
	
