 <nav class="header bg-dark d-flex justify-content-between" style="height: 45px;">
  <div> 
  	<a class="navbar-brand ml-3 text-white">Forum</a>
  </div>
  <div style="text-align: center;">
  	<a class="btn-user text-info" onclick="afficher()"><?php echo $user->prenom," ",$user->nom; ?></a>
  </div>
  <div id="info-user" class="info-user">
  		<?php 
  			//echo $form->startFormUser(" border  m-0 p-0", "Information de ".$user->login);
			$form->printInfoSimple("col-md-4","col-md-8", "NOM : ", $user->nom);
			$form->printInfoSimple("col-md-4","col-md-8",  "PRENOM : ", $user->prenom);
			$form->printInfoSimple("col-md-4","col-md-8",  "EMAIL : ", $user->email);
			$form->printInfoSimple("col-md-4","col-md-8",  "TELEPHONE : ", $user->tel);
			echo $form->buttonDeconnexion('index.php?Page=connexion',"deconnexion", "Deconnecter");
			echo $form->endFormUser();
  		 ?>
</div>
</nav>
