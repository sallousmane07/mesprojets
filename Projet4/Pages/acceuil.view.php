 

<?php 
$form = new FormUsers();
include('partials/_header.php');
include('Pages/bar.php');
?>	


<?php 


		/*echo $form->startFormUser("container col-md-4 well spacer", "Information de ".$user->login);
			$form->printInfo("col-md-6", "NOM : ", $user->nom);
			$form->printInfo("col-md-6", "PRENOM : ", $user->prenom);
			$form->printInfo("col-md-6", "EMAIL : ", $user->email);
			$form->printInfo("col-md-6", "TELEPHONE : ", $user->tel);
			echo $form->buttonDeconnexion('index.php?Page=connexion',"deconnexion", "Deconnecter");
			echo $form->endFormUser();*/
			$dao=new PublicationDAO($db) ;
			$daoUser=new UserDAO($db);
			$pubs=[];
			$pubs=$dao->getAll();	
			echo '
			<div class="col-md-12 ">
				<div class="">
					<div class=" d-flex justify-content-between align-items-center mx-3 mb-1 mt-3">
						<h5>Publications</h5>
						<a href="index.php?Page=ajoutpub" class = "btn btn-info" >
						Poster une publication
						</a>
					</div>
					<div class="">';

					foreach ($pubs as $pub) {
						$user_pub=$daoUser->getOne($pub->id_user());
						?>
						<div class="row mx-3 border">
							<div class="col-md-3 d-flex justify-content-center">
								<div class="p-3">
									<div class="rounded-circle bg-secondary" style="width: 60px;height: 60px;"></div>
								<div class="d-flex justify-content-center"><?php echo $user_pub->nom()."  ".$user_pub->prenom();?></div>
								</div>

							</div>
							<div class="col-md-9 py-2">
								<h5>
									<a href="index.php?Page=voir_plus&publication=<?php echo $pub->id_pub(); ?>">
										<?php echo $pub->sujet(); ?>
									</a>
								</h5>
								<p>
									<?php echo couperText($pub->texte(),50);
									 if(strlen($pub->texte())> 50){
									 	echo '<a href="index.php?Page=voir_plus&publication=',$pub->id_pub(),' ">voir plus</a>';
									 }
									 ?>
								</p>

							</div>
						</div>

				<?php
			}
			
			echo 
					'</div>
				</div>
			</div>';

			include('partials/_footer.php');

			?>








