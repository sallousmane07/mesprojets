<?php 
$dao=new PublicationDAO($db) ;
$user=$_SESSION['validate_user'];
	$voirpub= $dao->getOne($_GET['publication']);	

	require("Pages/voirpub.view.php");


 ?>