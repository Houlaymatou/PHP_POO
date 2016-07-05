<?php
	class User 
	{   
		private $db;
		public $id;
		public $firstName;
		public $lastName;
		public $email;

		public function __construct()
		{
				$connexion = new Database();
				$this->db = $connexion->connexion();
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
				return $users;
			
		}
		public function insert()
		{

		}

		public function update($id)
		{
			
		}

		public function delete($id)
		{
			
		}

		public function getFullName()
		{
				return $this->firstName . ' ' . $this->lastName;
		}
}
?>