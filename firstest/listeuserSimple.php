<?php require_once('verificationInsertion.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Liste User</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-cerulean.min.css">
</head>
<body>
	<div class="container spacer col-md-6 col-md-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading">Liste des utilisateurs non autorisés à se connecter</div>
			<div class="panel-body">
			
				<table class="table table-bordered table-striped">
					<tr>
						<th>Id</th>
						<th>Nom </th>
						<th>Prenom</th>
						<th>Email</th>
						<th>Telephone</th>
						<th>Login</th>
						<th>Action</th>
					</tr>
					<tr>
						<?php
						$bdd = new PDO('mysql:host=localhost;dbname=tp_php', 'root', ''); 
						$reponse = $bdd->query("SELECT * from user WHERE statu=0");
		
							while ($donnees = $reponse->fetch()) {//$nom,$prenom,$email,$tel,$login,$mdp,$profil,$statu
								echo "<tr>
											<td >".$donnees['id']."</td>
											<td>".$donnees['nom']."</td>
											<td>".$donnees['prenom']."</td>
											<td>".$donnees['email']."</td>
											<td>".$donnees['tel']."</td>
											<td>".$donnees['login']."</td>
											<td><a href='traitementlisteuserSimple.php?id=".$donnees['id']."'class='btn btn-primary btn-block'>Autoriser Connection</td>
										</tr>";
							}
						?>
					</tr>
					
				</table>
				
			</div>
		</div>
	</div>
</body>
</html>