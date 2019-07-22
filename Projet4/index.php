 <?php 
	if(isset($_GET['Page']) && !empty($_GET['Page'])){
		require('mesclasses/controller.php');
		
	}
	else{
		header("Location: index.php?Page=connexion");
		
	}
	
	

	
?>