 <?php 
	//namespace Publication;
	
		class Publication
		{
		private $_id_pub;
		private $_sujet;
		private $_texte;
		private $_id_user;

		public function id_pub()
		{
			return $this->_id_pub;
		}
		public function sujet()
		{
			return $this->_sujet;
		}
		public function texte()
		{
			return $this->_texte;
		}
		public function id_user(){
			return $this->_id_user;
		}
		public function setId_pub($id_pub)
		{
			$id_pub=(int)$id_pub;
			if(is_int($id_pub))
			{
				$this->_id_pub=$id_pub;
			}
		}
		public function setTexte($texte)
		{
			$this->_texte=$texte;

		}
		public function setSujet($texte)
		{
			$this->_sujet=$texte;

		}
		public function setId_user($id_pub)
		{
			
				$this->_id_user=$id_pub;
			
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