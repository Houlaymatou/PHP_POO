


<?php
	require_once ("boot.php");
	require_once ("style.php");
	echo '<div class="container">'; 
	echo '<div class="well">';
	echo '<h1>Liste des utilisateurs</h1>';
	echo '<p> Nombre d\'utilisateur '. User::countAll() . '</p>';
	echo '<a class="btn btn-warning" href="user_form.php"> Ajouter un utilisateur</a>';

	//Afficher le nombre d'utilisateurs

	//Afficher la liste
	$user = new User();
	$users = $user->findAll();
	
	echo '<table class="table table-striped table-hover">';
	foreach ($users as  $u) {
		echo '<tr>';
		echo '<td>'. $u->getFullName() .'</td>';
		echo '<td> <a class="btn btn-info" href="user_form.php?id='.$u->id.'">Update </a></td>';
		echo '<td> <a href="user_delete.php?id='.$u->id.'"   class="btn btn-primary" >Delete </a></td>';
		echo '<tr>';	
	 }
  echo '</table>';
  echo "</div>";
  echo "</div>";
?>

