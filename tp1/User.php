<?php
	class User 
	{   
		private $db;
		private $id;
		public $firstName;
		public $lastName;
		public $email;

		public function __construct()
		{
			$connexion = new Database();
			$this->db = $connexion->connexion();
			echo 'ok';
		}

		public function findAll()
		{
			$sth = $this->db->query("SELECT * FROM User");
			$sth->execute();
			$result = $sth->fetchAll(PDO::FETCH_OBJ);
			return $result;
			/*echo '<pre>';
			var_dump($result);
			*/
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
}
?>