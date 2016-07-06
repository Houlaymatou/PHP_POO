<?php
	require_once ("boot.php");
	

	if(isset($_GET['id'])){

		$user = User::findById($_GET['id']);
		if(!$user) {
			echo "User introuvable";
		}

		else{

			$user->delete();
			redirect('index.php');
		}
	}
	else {
		echo "il manque l'id";
	}

?>