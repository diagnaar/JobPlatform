<?php 
	if (!isset($_POST))
		//header('location:');
	else
	{
		$email = $_POST[''];
		$password = $_POST[''];
		try {
			$bdd = new PDO('mysql:host=localhost;dbname=job','root','');
		}
		catch (Exception $e) {
			die('Erreur : '.$e->getMessage());
		}
		$req = $bdd->prepare('INSERT INTO candidat(email, password) VALUES (:email, :password)');
		$req->execute(array(
			'email'=>$email,
			'password'=>$password
			));
		$req->closeCursor();
		//header('location:');
	}
?>