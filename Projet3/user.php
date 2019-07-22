<?php
 class User
{
	private $_id_user,
			$_nom,
            $_prenom,
            $_tel,
            $_email,      
            $_login,
            $_mdp;
            
	public function getId_user()
    {
        return $this->_id_user;
    }
    public function getNom(){
    	return $this->_nom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
    public function getTel(){
        return $this->_tel;
    }
    public function getEmail(){
        return $this->_email;
    }
    public function getLogin(){
        return $this->_login;
    }
    public function getMdp(){
        return $this->_mdp;
    }
    public function setId_user($id_user)
    {
    	$this->_id_user=$id_user;
    }
    public function setNom($nom){
    	$this->_nom=$nom;
    }
     public function setPrenom($prenom){
        $this->_prenom=$prenom;
    }
     public function setTel($tel){
        $this->_tel=$tel;
    }
     public function setMdp($mdp){
        $this->_mdp=$mdp;
    }
    public function setLogin($login){
        $this->_login=$login;
    }
     public function setEmail($email){
        $this->_email=$email;
    }


    public function hydrate(array $donnees)
	{
		foreach ($donnees as $key => $value) {
		$methode='set'.ucfirst($key);
			if(method_exists($this, $methode))
			{
				$this->$methode($value);
	       	}
		}
	}
	public function __construct(array $donnees)
  	{
       	$this->hydrate($donnees);
  	}
    
}	
?>