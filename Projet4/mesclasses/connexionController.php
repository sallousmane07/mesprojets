<?php 

if (isset($_POST['connexion'])) {
	
	$dao=new UserDAO($db);
		$connect=[];
		$connect["login"]=$_POST["login"];
		$connect["mdp"]=$_POST["mdp"];
		if (notEmpty($connect)) 
		{					
			$user = $dao->verifieUser($connect['login'],$connect['mdp']);
			if($user){
				$_SESSION['validate_user'] = $user;

				header("Location: index.php?Page=acceuil");
				
			}
			else{ 
				message("Login ou mot de passe incorrect <br>");
			}
		}

		else{
			message("Veuillez remplir tous les champs<br>");
		}
}
else if(isset($_POST['deconnexion'])){
	session_destroy();
	header("Location: index.php?Page=connexion");
}

require('Pages/connexion.view.php');

 ?>