<?php

 
	 abstract class Sportif
	 {
		abstract public function hello(); //méthode abstraite, elle decra être implementée (avoir un corps) dans les classes filles
		public function bye()
		 {
		 	echo 'bye';
		 }
	 }

	 
	 class Footballer extends Sportif
	 {
	 	//on implemente la fonction abstraite définie dans la classe parente
	 	public function hello()
	 	{
	 		echo "Hello!";
	 	}
	 }

	 
	 class Tennisseman extends Sportif
	 {
	 	
	 	
	 }
	 // il est interdit d'instancier une classe abstraite
	 $f = new Footballer();
	 $f->hello();
	 echo '<br>';
	 $f->bye();
	 $t = new Tennisseman();
	 //$t->hello();//fatal erreur si la méthode hello n'est pas implementé dans la classe tennisseman
?>
