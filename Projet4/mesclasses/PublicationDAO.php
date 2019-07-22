 <?php 
	//namespace Publication;

	class PublicationDAO	
	{
		private $_db;	
		
		function __construct($db)
		{
			$this->setDb($db);
		}
		public function setDb($db){
			$this->_db=$db;
		}

		public function add(Publication $pub){
			$q=$this->_db->prepare('INSERT INTO Publication(sujet,texte,id_user) VALUES (:sujet,:texte,:id_user)')  or die(print_r($_db->errorInfo()));;
			$q->bindvalue(':sujet',$pub->sujet());	
			$q->bindvalue(':texte',$pub->texte());
			$q->bindvalue(':id_user',$pub->id_user());
			$q->execute();
			$pub->hydrate(['Publication' => $this->_db->lastInsertId(),]);

		}
		/*public function upPublication(Publication $pub){
			$q=$this->_db->prepare('UPDATE Publication set sujet=:sujet,texte=:texte where id_pub=:id_pub') or die(print_r($b_db->errorInfo()));;
			$q->bindvalue(':sujet',$pub->sujet());
			$q->bindvalue(':texte',$pub->texte());
			$q->execute();
		}


		public function delete(Publication $pub){
			$q=$this->_db->prepare('DELETE from Publication where id_pub=:id_pub') or die(print_r($_db->errorInfo()));;;
			$q->bindvalue(':id_pub',$pub->id_pub());
			$q->execute();
		}*/

		public function count(){
			return $this->_db->query('SELECT COUNT(*) FROM Publication')->fetchColumn() or die(print_r($_db->errorInfo()));;;
		}

		
		

		public function getOne($id_pub){
			$q=$this->_db->query('SELECT * from Publication where id_pub='.$id_pub);
			$donnees=$q->fetch(PDO::FETCH_ASSOC);
			return new Publication($donnees);
		}

		public function getAll(){
			$Publications = [];
      		$q = $this->_db->query('SELECT * FROM Publication');

    		while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    		{	
      	  		$Publications[]= new Publication($donnees);
    		}
    		return $Publications;
		}

	}

 ?>