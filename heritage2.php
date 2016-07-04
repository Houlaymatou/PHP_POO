<?php
/**
* 
*/
	class Sportif //clas parent
	{
		public $name = "léo Messi";
		protected $age;

		function getName()
		{
			return $this->name;
		}
		
	
	}

	
	class  Footballer extends Sportif // class fille
	{
		public $name = "Lamine Diallo";
		public $nbGoals = 10;
		function getNbGoals() 
		{
			return $this->nbGoals;
		}
	}

	class Tennisman extends Sportif // class fille
	{
		
	}
	$br = '<br>';
	$footballer = new Footballer();
	$tennisman = new Tennisman();

	var_dump($footballer); 
	print($br);
	var_dump($tennisman);
	print($br);

	$footballer->name = "pascal Feindouno";
	echo $footballer->getName();
	print($br);
	echo "Nombre de but = " . $footballer->getNbGoals();
?>