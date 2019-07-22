<?php
require 'user.php';

class Fonctions{
	private $bd;
	
		
	function __construct($db)
	{
		$bd=$this->getDB();
	}
	
	public	function getDB()
	{
		$this->bd=null;
		try 
		{
			$this->bd =  new PDO("mysql:dbname=tp_php;host=127.0.0.1", "root", "");
			$this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (Exception $e) {
			echo $e;
		}
		return $this->bd;
	}
	public function verifieUser(User $user)
	{
		$bd = $this->getDB();
		$return = false;
		if(!is_null($bd)){
			$sql = "SELECT * from user where login=:login and password=:password";
			$element = $bd->prepare($sql);
			$element->execute(array(
				":login" => $user->getLogin(),
				":password" => $user->getMdp()
			));
			$result = $element->fetch(PDO::FETCH_ASSOC);
			$nb_ligne = $element->rowCount();
			if($nb_ligne>0) {
				session_start();
				$_SESSION["CURRENT_USER"] = $result;
				$return=true; 
			}
		}
		return $return;
	}
	
	public function validerUser(User $user)
	{
		$bd = $this->getDB();
		if (!is_null($bd)) {
			$req = "UPDATE user set statu=1 where id_user=?";
			$el = $bd->prepare($req);
			$el->execute(array($user->getId_user()));
		}
	}
	public function add(User $User){
		
            $q=$this->getDB()->prepare('INSERT INTO user(nom,prenom,email,tel,login,mdp) VALUES (:nom,:prenom,:email,:tel,:login,:mdp)') or die(print_r($bd->errorInfo()));
            $q->bindvalue(':nom',$User->getNom());
            $q->bindvalue(':prenom',$User->getPrenom());
            $q->bindvalue(':email',$User->getEmail());
            $q->bindvalue(':tel',$User->getTel());
            $q->bindvalue(':login',$User->getLogin());
            $q->bindvalue(':mdp',$User->getMdp());
            $q->execute();
            $User->hydrate(['User' => $this->bd->lastInsertId(),]);
        }
    public function delete(User $user){
        $q=$this->bd->prepare('DELETE from user where id_user=:id_user') or die(print_r($bd->errorInfo()));;;
        $q->bindvalue(':id_user',$user->getId_user());
        $q->execute();
    }
    public function getAll(){
	$users = [];
	$q = $this->bd->query('SELECT * FROM user');
   		while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
   		{
      	  		$users[]= new User($donnees);
  		}
    		return $users;
	}

}
