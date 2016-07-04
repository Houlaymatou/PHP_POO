
<?php
	class user
		{
			public $firstName;
			public $lastName;
			private $age;
			//méthode magique invoquée automatiquement 
			//à l'instanciation de la classe
			/*function _construct($firstName, $lastName)
			{
				//echo 'classe instanciée';
				$this->firstName = $firstName;
				$this->lastName = $lastName;
			}
			*/
			function __construct($options = [])
			{
				$this->firstName = $options['firstName'];
				$this->lastName = $options['lastName'];
			}

			function getFullName()
			{
				return $this->firstName . ' ' . strtoupper($this->lastName);
			}	
		}
		
		/*$u1 = new user('Titi', 'Camara');
		echo $u1->getFulName();
	    */
		$options = [
		'firstName' => 'Antonio',
		'lastName' => 'Conte'
		];

		$u3 = new user($options);
		echo $u3->getFullName();

?>
