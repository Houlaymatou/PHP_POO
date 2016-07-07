<?php
	
	interface Formater //Format
	{
		public function format($text);
	}
	//Formaters
	// classes implementant l'interface format
	//Chacune proposant une version de la méthode format
	class XMLFormater implements Formater
	{
		public function format($text)
		{
			return '<?XML version="1.0"
					encoding="ISO-8859-1"?>' ."\n".
					'<message>' ."\n"."\t".'<date>'
					.time().'</date>'."\n"."\t"
					.'<text>'.$text.'</text>'."\n"
					.'</message>';
		}
	}

	class TextFormater implements Formater
	{
		public function format($text)
		{
			return 'Date: '.time()."\n".'Texte: '.$text;
		}
	}

	class HTMLFormater implements Formater
	{
		public function format($text)
		{
			return '<p>Date: '.time()."\n".'Texte: '.$text.'</p>';
		}
	}

	//Writer
	abstract class Writer
	{
		protected $formater;
		public function __construct($formater)
			{
				//hydratation à l'instanciation
				$this->formater = $formater;
			}
		public abstract function write($text);
	}

 	// deux classes héritant de Writer
	class FileWriter extends Writer
	{	
		protected $file;
		public  function __construct($file)
		{
			$this->file = $file;//hydratation à l'instanciation
		}
		public  function write($text)
		{
			//Ecrit sur le disque en php
			$f = fopen($this->file, 'w');	//création du fichier sur le disque
			fwrite($f, $text);
			fclose($f);
		}	
	}

	class DBWriter extends Writer
	{	
		protected $db;//type PDO
		public  function __construct($formater, $db)
		{
			//$this->formater =$formater;
			$this->db = $db;
		}
		public  function write($text)
		{
			//Ecrit dans la Data Base
			$query = $this->db->prepare('INSERT INTO messages(text)  VALUES (:text)');
			$query->bindValue(':text', $text);
			$query->execute();
		}	
	}

	require '../database.php';
	$db = new Database();
	$pdo =$db->connexion();
	$dbw = new DBWriter(null, $pdo);
	$dbw->write('hye');
?>