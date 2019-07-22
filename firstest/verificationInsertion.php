<?php 
	 function Verification(array $donnees)
	 {
	 	foreach ($donnees as $key) {
	 		if (!(isset($key)&& !empty($key))) {
	 			return false;
	 		}
	 	}
	 	return true;
	 }
	 function VerificationLoginExist($login){
	 	$bdd = new PDO('mysql:host=localhost;dbname=tp_php', 'root', ''); 
		return (bool)$bdd->query("SELECT * from user where login='$login'")->fetchColumn();
	 	
	 }
	 function InsertionBDD($nom,$prenom,$email,$tel,$login,$mdp,$profil,$statu)
	 {
	 	$bdd = new PDO('mysql:host=localhost;dbname=tp_php', 'root', ''); 
		$rqt = "INSERT INTO user (nom, prenom, email, tel, login, mdp, profil, statu) VALUES('$nom', '$prenom', '$email','$tel','$login','$mdp','$profil','$statu')";
		$bdd->exec($rqt);
	 }
	
	
 ?>