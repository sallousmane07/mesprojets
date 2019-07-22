<?php 
try
{

	$bdd = new PDO('mysql:host=localhost;dbname=tp_php;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

	if (isset($_GET['id'])) {
		 $id=$_GET['id'];var_dump($id);
		$reponse = $bdd->query( "UPDATE user  SET statu = 1 WHERE id = '$id'");
		$bdd->exec($reponse);
		header('location: listeuserSimple.php');
	}
 ?>