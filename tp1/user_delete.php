<?php
	require_once ("boot.php");
	

	if(isset($_GET['id'])){

		$user = User::findById($_GET['id']);
		if(!$user) {
			echo "User introuvable";
		}

		else{

			$user->delete();
		}
	}
	else {
		echo "il manque l'id";
	}

?>