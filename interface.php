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
		{
			return $this->$property;
		}
	}

	class Book extends Document
	{
		public $title;
	}

	class Article extends Document
	{
		public $issueYear = 2016;
	}
	$br = '<br>';
	$b = new Book();
	$a = new Article();
	echo $b->textFormat('texte');
	echo $br;
	echo $a->htmlFormat('issueYear');
?>