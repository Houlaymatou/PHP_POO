<?php

class Database 
{
	public function connexion()
	{
		$db = new PDO('mysql:host=localhost;dbname=poo','root','lamine');
		return $db;
	}

}
?>