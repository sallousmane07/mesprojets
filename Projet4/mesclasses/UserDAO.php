 	<?php 
class UserDAO
{
	private $_db;	
		
		function __construct($db)
		{
			$this->setDb($db);
		}
		public function setDb($db){
			$this->_db=$db;
		}
		public function db(){
			return $this->_db;
		}
		public function verifieUser($login,$mdp)
		{
			
			$return = $this->_db->query("SELECT * FROM user WHERE mdp='$mdp'and login='$login'");
						$donnees = $return->fetch(PDO::FETCH_OBJ);
			return $donnees;
			
		}
		public function is_exist(User $user){
			return (bool) $this->_db->query('SELECT COUNT(*) FROM User WHERE login like "'.$user->login().'"')->fetchColumn();
		}
	
	/*public function validerUser(User $user)
	{
		$bd = $this->getDB();
		if (!is_null($bd)) {
			$req = "UPDATE user set statu=1 where id_user=?";
			$el = $bd->prepare($req);
			$el->execute(array($user->getId_user()));
		}
	}*/
		public function add(User $User){
		
            $q=$this->_db->prepare('INSERT INTO user(nom,prenom,email,tel,login,mdp) VALUES (:nom,:prenom,:email,:tel,:login,:mdp)') or die(print_r($this->_db->errorInfo()));
            $q->bindvalue(':nom',$User->nom());
            $q->bindvalue(':prenom',$User->prenom());
            $q->bindvalue(':email',$User->email());
            $q->bindvalue(':tel',$User->tel());
            $q->bindvalue(':login',$User->login());
            $q->bindvalue(':mdp',$User->mdp());
            $q->execute();
            $User->hydrate(['User' => $this->_db->lastInsertId(),]);
        }
    public function delete(User $user){
        $q=$this->_db->prepare('DELETE from user where id_user=:id_user') or die(print_r($bd->errorInfo()));;;
        $q->bindvalue(':id_user',$user->id_user());
        $q->execute();
    }
    public function getOne($id){
			$q=$this->_db->query('SELECT * from User where id_user='.$id);
			$donnees=$q->fetch(PDO::FETCH_ASSOC);
			return new User($donnees);
		}
    public function getAll(){
	$users = [];
	$q = $this->_db->query('SELECT * FROM user');
   		while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
   		{
      	  		$users[]= new User($donnees);
  		}
    		return $users;
	}
}


 ?>