<?php 
$form = new FormUsers();
include('partials/_header.php');
include('Pages/bar.php');

$daoUser=new UserDAO($db) ;
$user_pub=$daoUser->getOne($voirpub->id_user());
?>	
<div class=" d-flex justify-content-between align-items-center mx-3 mb-1 mt-3">
	<h4><a href="#" class = "btn btn-info" >pub</a></h4>
</div>
<div class="row mx-3 border">
	<div class="col-md-3 d-flex justify-content-center">
		<div class="p-3">
			<div class="rounded-circle bg-secondary" style="width: 60px;height: 60px;"></div>
			<div class="d-flex justify-content-center"><?php echo $user_pub->nom()."  ".$user_pub->prenom();?></div>
		</div>
	</div>
	<div class="col-md-9 py-2">
		<h3 style="color: blue;"><?php echo $voirpub->sujet(); ?></h3>
		<p>	<?php echo $voirpub->texte(); ?></p>
	</div>
</div>