<?php 
session_start();
require 'fonctions.php';
$titre = "Admin";
include 'header.php'; 
$alluser = Fonctions::getAllUSer();
?>


<div class="container">
	<table>
		<thead>
			<th>id</th>
			<th>Prenom</th>
			<th>Nom</th>
			<th>login</th>
			<th>action</th>
		</thead>
		<tbody>
			<?php foreach ($alluser as $key => $value):?>
				<tr>
					<td><?= $value["id"];?></td>
					<td><?= $value["prenom"];?></td>
					<td><?= $value["nom"];?></td>
					<td><?= $value["login"];?></td>
					<td>
						<?php if($value["statut"] == false){?>
						<form action="traitement.php" method="post">
							<input type="hidden" value=<?= $value["id"];?>>
							<button type="submit" name="valider">Valider</button>
						</form>
						<?php }else echo "user Valide !!"; ?>
					</td>
				</tr>

			<?php endforeach;?>
		</tbody>
	</table>
	

</div>


<?php  include 'footer.php'; ?>