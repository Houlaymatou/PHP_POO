<?php
/**
* 
*/
	class Sportif 
	{
		public $name;
		
	
	}

	/**
	* 
	*/
	class  Footballer
	{
			
		public $name;
		public $age;

		function getName()
		{
			return $this->name;
		}
	}

	class Tennisman 
	{
		public $name;
	}
	$sportif = new Sportif();
	$sportif->name = "Alessandro Del piero";
	var_dump($sportif); 
	echo '<br>';
	echo $sportif->name;
	echo '<br>';
	$footballer = new Footballer();
	$footballer->name = "Paul Pogba";
	$footballer->age = 23;
	echo $footballer->name; 
	echo '<br>';
	$footballer2 = new Footballer();
	$footballer2->name = "Didier Drogba";
	echo $footballer2->getName();
	echo '<br>';
	$footballer3 = new Footballer();
	$footballer3->name = "Yaya touré";
	echo $footballer3->getName();
	
?>