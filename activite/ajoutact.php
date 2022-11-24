<?php
	try {
		
		$bdd = new PDO('mysql:host=localhost;dbname=gacti;charset-utf8','root','');
	}catch(Exeption $e)
	{
		die('Erreur'.$e->getMessage());
	}
	$code=$_POST['codeanim'];
	$date=$_POST['dateact'];
	$hrdv=$_POST['rdvact'];
	$prix=$_POST['prixact'];
	$hdebut=$_POST['hdebutact'];
	$hfin=$_POST['hfinact'];
	$datean=$_POST['dateannuleact'];
	$pre=$_POST['prerespact'];
	$nom=$_POST['nomrespact'];
	

	$stmt=$bdd->prepare("INSERT INTO activite (CODEANIM, DATEACT, CODEETATACT, HRRDVACT, PRIXACT, HRDEBUTACT, HRFINACT, DATEANNULEACT, NOMRESP, PRENOMRESP) VALUES (:CODEANIM, :DATEACT, :CODEETATACT, :HRRDVACT, :PRIXACT, :HRDEBUTACT, :HRFINACT, :DATEANNULEACT, :NOMRESP, :PRENOMRESP)");
	$stmt->execute([
		"CODEANIM"=>$code,
		"DATEACT"=>$date,
		"CODEETATACT"=>"01",
		"HRRDVACT"=>$hrdv,
		"PRIXACT"=>$prix,
		"HRDEBUTACT"=>$hdebut,
		"HRFINACT"=>$hfin,
		"DATEANNULEACT"=>$datean,
		"NOMRESP"=>$pre,
		"PRENOMRESP"=>$nom,
	]);
	header("Location:ajtactivite.php")
?>
