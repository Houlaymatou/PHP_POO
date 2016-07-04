<?php
	//object
	class Animal
	 {	//propieté
	 	public $speed = 0; 
	 	protected $weight ;//transmise par héritage
	 	public $height ;
	 	private $nbFangs; //PEAR convention $_nbFangs non transmise par héritage

	 	//method
	 	function test() 
	 	{
	 		echo "<p>ciao</p>";

	 	}
	 	//getter accesseur
	 	function getSpeed()
	 	{	

	 		return $this->speed * 2;
	 	}

	 	function getNbFangs() 
	 	{
	 		return $this->nbFangs = 4;
	 	}

	 	function getWeight()
	 	{
	 		return $this->weight;
	 	}
	 	//setter pour modifier

	 	function setWeight($weight)
	 	{
	 		$this->weight = $weight;
	 	}
	}
	$br = '<br>';
	//instancié
	$wolf = new Animal();
	echo $wolf->speed; 
	echo $br;
	//ecriture
	echo $wolf->getWeight();//lecture
	echo $br;
	//protected => mecanisme getter setter pour acceder 
	$wolf->setWeight(123);
	echo $wolf->getWeight();

	echo $br;
	$bear = new Animal();
	echo $bear->speed = 100;
	echo $br;
	$bear->height = 240;
	echo $bear->height;
	
	$wolf->test();
	$bear->test();
	echo $bear->getSpeed();
	print $br;
	echo $wolf->getSpeed();
	echo $br;
	echo $bear->getNbFangs();

	/**
	*  
	*/
	

 


?>