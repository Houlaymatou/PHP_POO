<?php
	class User 
	{   
		private $db;
		public $id;
		public $firstName;
		public $lastName;
		public $email;
		private static $database;

		public function __construct()
		{
				$connexion = new Database();
				$this->db = $connexion->connexion();
		}

		public static function countAll() 
		{	$connexion = new Database();
			self::$database = $connexion->connexion();
			$sth = self::$database->query('SELECT COUNT(*) FROM User');
			$sth->execute();
			$result = $sth->fetch(PDO::FETCH_NUM);//renvoie un tableau
			return $result[0];
		}

		//selection by id
		//méthode statique = méthode de classe
		//invoqué par le ::
		public function findById($id)
		{		
				//variante si contexte statique
			    $connexion = new Database();
				self::$database = $connexion->connexion();
				$sth = self::$database->query("SELECT * FROM User WHERE id=".$id );
				$sth->execute();
				$result = $sth->fetch(PDO::FETCH_OBJ);
				
				if(!$result) {
					return false;
				}
				else {
					//instanciation d'objet + ajout(hydratation) 
					$user = new User();
					$user->id = $result->id;
					$user->firstName = $result->firstName;
					$user->lastName = $result->lastName;
					$user->email = $result->email;

					return $user;
				}		
				
		}

		public function findAll()
		{
				$sth = $this->db->query("SELECT * FROM User");
				$sth->execute();
				$results = $sth->fetchAll(PDO::FETCH_OBJ);
				
				$users = [];
				
				foreach ($results as $result) 
				{
					$user = new User();
					//hydratation  de l'objet : on alimente
					//ses propriété
					$user->id = $result->id;
					$user->firstName = $result->firstName;
					$user->lastName = $result->lastName;
					$user->email = $result->email;
					$users[] = $user;
				}
				return $users; //retourne un tableau
			
		}
		public function insert()
		{
			$sth = $this->db->prepare("INSERT INTO User (firstName, lastName, email) VALUES (:firstName, :lastName, :email)");
			$sth->bindValue(':firstName', $this->firstName);
			$sth->bindValue(':lastName', $this->lastName);
			$sth->bindValue(':email', $this->email);
			$sth->execute();

		}

		public function update()
		{
			$sth = $this->db->prepare("UPDATE User SET id=:id, firstName=:firstName, lastName=:lastName, email=:email WHERE id=:id");
			$sth->bindValue(':id', $this->id);
			$sth->bindValue(':firstName', $this->firstName);
			$sth->bindValue(':lastName', $this->lastName);
			$sth->bindValue(':email', $this->email);
			$sth->execute();


		}

		public function delete()
		{
				$sth = $this->db->query("DELETE FROM User WHERE id=".$this->id);
				$sth->execute();
		}

		public function getFullName()
		{
				return $this->firstName . ' ' . $this->lastName;
		}

		
}
?>