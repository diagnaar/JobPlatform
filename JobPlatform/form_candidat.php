<?php 
	if (!isset($_POST))
		//header('location:');
	else
	{
		$email = $_POST[''];
		$ine = $_POST[''];
		$nom = $_POST[''];
		$prenom = $_POST[''];
		$dateNaiss = $_POST[''];
		$numTel = $_POST[''];
		$adresse = $_POST[''];
		$region = $_POST[''];
		$departement = $_POST[''];
		$specialite = $_POST[''];
		try {
			$bdd = new PDO('mysql:host=localhost;dbname=job','root','');	
		}
		catch (Exception $e) {
			die('Erreur : '.$e->getMessage());
		}
		$req = $bdd->prepare('UPDATE candidat SET ine=:ine, nom=:nom, prenom=:prenom, dateNaiss=:dateNaiss,
							numTel=:numTel, adresse=:adresse, region=:region, departement=:departement, specialite=:specialite
							WHERE email=:email');
		$req->execute(array(
			'ine'=>$ine,
			'nom'=>$nom,
			'prenom'=>$prenom,
			'dateNaiss'=>$dateNaiss,
			'numTel'=>$numTel,
			'adresse'=>$adresse,
			'region'=>$region,
			'departement'=>$departement,
			'specialite'=>$specialite,
			'email'=>$email 
			));
		$req->closeCursor();
		//header('location:');
	}
?>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action='form_candidat.php' method='POST'>

		</form>
	</body>
</html>