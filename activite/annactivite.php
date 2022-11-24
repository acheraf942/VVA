<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body bgcolor="#112337">
<?php require_once('../general/barre_nav.php');
require_once'../connexion/config.php'?>
Selectionner une animation:
<select name="animation" id="animation" data-target="animation" data-url="animation.php" class="ajaxTab">
<?php
	$sql ="SELECT CODEANIM, NOMANIM FROM animation";
	foreach  ($bdd->query($sql) as $row)
	{
		echo "<option value=$row[CODEANIM]>$row[NOMANIM]</option>";
	}
?>
</select>
<table>
	<tr>
		<td>code de l'animation correspondante</td>
		<td>date</td>
		<td>code</td>
		<td>heure de rendez-vous</td>
		<td>prix</td>
		<td>heure de début</td>
		<td>heure de fin</td>
		<td>date de fin</td>
		<td>nom responsable</td>
		<td>prenom responsable</td>
	</tr>
	<tr>
<?php
	$result = $bdd->query("SELECT * FROM activite");
	while ($act=$result->fetch()) {
?>
	<tr>
		<td><?=$act["CODEANIM"];?></td>
		<td><?=$act["DATEACT"];?></td>
		<td><?=$act["CODEETATACT"];?></td>
		<td><?=$act["HRRDVACT"];?></td>
		<td><?=$act["PRIXACT"];?></td>
		<td><?=$act["HRDEBUTACT"];?></td>
		<td><?=$act["HRFINACT"];?></td>
		<td><?=$act["DATEANNULEACT"];?></td>
		<td><?=$act["NOMRESP"];?></td>
		<td><?=$act["PRENOMRESP"];?></td>
		<td><a href="supract.php?DATEACT=<?=$act["DATEACT"];?>"><button>supprimer</button></a></td>
	</tr>
<?php } ?>
</table>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="app.js"></script>
</html>