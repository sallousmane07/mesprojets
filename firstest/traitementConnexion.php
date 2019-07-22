<?php
try
{

	$bdd = new PDO('mysql:host=localhost;dbname=tp_php;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$mdp=$_POST['mdp'];
$login=$_POST['login'];
$reponse = $bdd->query("SELECT * FROM user WHERE mdp='$mdp'and login='$login'");
$exist=(bool)$reponse->fetchColumn();
if ($exist) 
{
	while ($donnees = $reponse->fetch())
	{
		if($donnees['statu']==1)
			{
				?>
    			<p>
    			<marquee><h1>Bonjour  <?php echo $donnees['nom']."  ".$donnees['prenom']; ?></h1><br /></marquee>
   				</p>
   				<?php  
				if($donnees['profil']=="ADMINISTRATEUR") 
				{
					echo	"<a href='listeuserSimple.php' class='btn btn-warning'>Cliquez ici pour voir Liste des utilisateurs qui ne sont pas autorisés à se connecter </a>";
				}
			}
			else
			{
				echo "L'utilisateur n'est pas autorisé à se connecter par un ADMINISTRATEUR";
			}
			//break;
		
	}
}
else{
	echo "Mot de passe ou login erroné!";
	}



$reponse->closeCursor(); 
?>