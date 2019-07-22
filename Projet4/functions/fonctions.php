<?php 
//require('./mesclasses/User.php');
//use Publication;
// cette fonction permet d'appeler automatiquement les classes
	function chargerClass($nomClass)
	{
		require_once 'mesclasses/'.$nomClass.'.php';
	}

	function chargerMesClasses(){
		spl_autoload_register('chargerClass');
	}
	function couperText($text,$size){
		if(strlen($text)>$size){
			return substr($text, $size).' ...';
		}
		return $text;
	}

// cette fonction renvoie true si tous les champs sont remplis sinon elle renvoie false
	function notEmpty($tab=[]){
		foreach ($tab as $key => $value) {
		 	 
			if(empty($value)){
				return false;
			}
		 } 
		
		return true;
	}

	// cette methode permet d'afficher les messages d'erreur
	function message($texte, $type="danger")
	{
		echo '<div class="alert alert-'.$type.' text-center">'.$texte.'</div>';
	}
	

 ?>