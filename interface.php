<?php
	
	interface Format //Ne contient que des méthodes
	{
		public function textFormat($input);//preciser les arguments attendus
		public function htmlFormat($output);
		
	}


	abstract class Document implements Format
	{
		public function textFormat($text)
		{
			return $text ." (modifié par textFormat)";
		}

		public function htmlFormat($property)
		{//$this->$property est résolue dynamiquement dans le contexte de l'objet qui appelle la méthode
		//$this->$property devient dynamiquement $a->title
			return '<strong>'. $this->$property . '</strong>';
		}
	}

	class Book extends Document
	{
		public $title;
	}

	class Article extends Document
	{
		public $issueYear = 2016;
		public $title = 'Voyage au bout de la nuit';
	}
	$br = '<br>';
	$b = new Book();
	$a = new Article();
	echo $b->textFormat('texte');
	echo $br;
	echo $a->htmlFormat('issueYear');
	echo $br;
	echo $a->htmlFormat('title');//l'objet retourne une version formatée de sa propriété title
?>