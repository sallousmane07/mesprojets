 <?php 
 
	include('partials/_header.php');
	$form = new Formulaire();

	echo $form->startForm("container col-md-offset-4 col-md-3 well spacer", "Formulaire Connexion", "index.php?Page=connexion");

	echo $form->input("login", "Login");
	echo $form->password("mdp", "Mot de passe");
	echo $form->reset("Inscription", "index.php?Page=inscription");
	echo $form->submit("connexion", "Connexion");

	echo $form->endForm();

	include('partials/_footer.php');
 