<?php
	
	interface A 
	{
		//une interface ne contient que des méthodes
		public function hello();
		
	}
	interface B 
	{
		//une interface ne contient que des méthodes
		public function bye();
		
	}

	class Document implements A, B
	{
		public function hello() 
		{
			echo 'hello!';
		}

		public function bye() 
		{
			echo 'Cio!';
		}
	}

	class Article extends Document //hérite de toutes les méthode de sa classe parente
	{

	}
	$br = '<br>';
	$d = new Document();
	$d->hello();
	echo $br;
	$d->bye();
	echo $br;
	$a = new Article();
	$a->bye();
	echo $br;
	$a->hello();
?>