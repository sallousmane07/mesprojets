 <?php 	

if(isset($_POST['add_publication'])){
	$current_user=new User((array)$_SESSION['validate_user']);
	
	$dao1=new PublicationDAO($db);
	$connect=[];
	$connect["sujet"]=$_POST["sujet"];
	$connect["texte"]=$_POST["texte"];
	$connect["id_user"]=$current_user->id_user();

	if (notEmpty($connect)) {
		$pub = new Publication($connect);			
		$dao1->add($pub);
		header("Location: index.php?Page=acceuil");				
	}
	else{
		message("Veuillez remplir tous les champs");
		
	}
}

require('Pages/ajouter1pub.php');
?>