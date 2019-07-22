 	<?php 
	if(isset($_POST['inscription'])){
		$dao=new UserDAO($db);
		$user=[];
		$user["nom"]=$_POST["nom"];
		$user["prenom"]=$_POST["prenom"];
		$user["email"]=$_POST["email"];
		$user["tel"]=$_POST["tel"];
		$user["login"]=$_POST["login"];
		$user["mdp"]=$_POST["mdp"];
		if (notEmpty($user)) {
			$use = new User($user);
			if ($dao->is_exist($use)) {
				message("Ce login n'est pas disponible");
			}
			else{			
				$dao->add($use);
				header("Location: index.php?Page=connexion");
					}		
		}
		else{
			message("Veuillez remplir tous les champs");

		}
	}
	
		require('Pages/inscription.view.php');	
	
 ?>