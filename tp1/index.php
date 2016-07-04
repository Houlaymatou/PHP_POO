<?php
	require_once ("database.php");
	require_once("User.php");
	
	echo '<h1>Liste des utilisateurs</h1>';
	echo '<button> Ajouter un utilisateur</button>';

	//Afficher la liste
	$user = new User();
	$users = $user->findAll();

	foreach ($users as  $u) {
		echo '<p>'. $u->firstName . ' ' . 
		$u->lastName . '</p>';
		
	}

?>