<?php
	try {
		
		$bdd = new PDO('mysql:host=localhost;dbname=gacti;charset-utf8','root','');
	}catch(Exeption $e)
	{
		die('Erreur'.$e->getMessage());
	}
	$code=$_POST['codeanim'];
	$codet=$_POST['codetypeanim'];
	$nom=$_POST['nomanim'];
	$datecre=$_POST['datecreanim'];
	$dateval=$_POST['datevalidanim'];
	$duree=$_POST['dureeanim'];
	$limitage=$_POST['ageanim'];
	$tarif=$_POST['tarifanim'];
	$nbplace=$_POST['nbplaceanim'];
	$descr=$_POST['descranim'];
	$comm=$_POST['comanim'];
	$diff=$_POST['difanim'];
	

	$stmt=$bdd->prepare("INSERT INTO animation (CODEANIM, CODETYPEANIM, NOMANIM, DATECREATIONANIM, DATEVALIDITEANIM, DUREEANIM, LIMITEAGE, TARIFANIM, NBREPLACEANIM, DESCRIPTANIM, COMMENTANIM, DIFFICULTEANIM) VALUES (:CODEANIM, :CODETYPEANIM, :NOMANIM, :DATECREATIONANIM, :DATEVALIDITEANIM, :DUREEANIM, :LIMITEAGE, :TARIFANIM, :NBREPLACEANIM, :DESCRIPTANIM, :COMMENTANIM, :DIFFICULTEANIM)");
	$stmt->execute([
		"CODEANIM"=>$code,
		"CODETYPEANIM"=>$codet,
		"NOMANIM"=>$nom,
		"DATECREATIONANIM"=>$datecre,
		"DATEVALIDITEANIM"=>$dateval,
		"DUREEANIM"=>$duree,
		"LIMITEAGE"=>$limitage,
		"TARIFANIM"=>$tarif,
		"NBREPLACEANIM"=>$nbplace,
		"DESCRIPTANIM"=>$descr,
		"COMMENTANIM"=>$comm,
		"DIFFICULTEANIM"=>$diff,
	]);
	header("Location:ajtanimation.php")
?>
