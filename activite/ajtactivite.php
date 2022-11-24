<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body bgcolor="#112337" onload="initElement();">
<?php require_once('../general/barre_nav.php');
$bdd = new PDO('mysql:host=localhost;dbname=gacti;charset-utf8','root','');?>
	<div class="ajt">
	<form action="ajoutact.php" method="post">
		<h3>Ajouter une activité</h3>
		<table>
			<tr>
				<td>
				Animation correspondante:
				</td>
				<td>
				<select name="codeanim" onchange="combo(this,'theinput')">
					<?php
					$sql ="SELECT CODEANIM, NOMANIM FROM animation";
					foreach  ($bdd->query($sql) as $row) {
					   echo "<option value=$row[CODEANIM]>$row[NOMANIM]</option>";
					}
					?>

				</select>
				</td>

			</tr>
			<tr>
				<td>
				Date:
				</td>
				<td>
				<input type="Date" name="dateact">
				</td>

			</tr>
			<tr>
				<td>
				Heure de rendez-vous:
				</td>
				<td>
				<input type="time" name="rdvact">
				</td>

			</tr>
			<tr>
				<td>
				Prix:
				</td>
				<td>
				<input type="number" name="prixact">
				</td>

			</tr>
			<tr>
				<td>
				Heure du début:
				</td>
				<td>
				<input type="time" name="hdebutact">
				</td>

			</tr>
			<tr>
				<td>
				Heure de fin
				</td>
				<td>
				<input type="time" name="hfinact">
				</td>

			</tr>
			<tr>
				<td>
				Date annulé:
				</td>
				<td>
				<input type="date" name="dateannuleact">
				</td>

			</tr>
			<tr>
				<td>
				Nom du responsable:
				</td>
				<td>
				<input type="text" name="prerespact">
				</td>

			</tr>
			<tr>
				<td>
				Prénom du responsable:
				</td>
				<td>
				<input type="text" name="nomrespact">
				</td>

			</tr>
			<tr>
				<td>
				<input type="submit" name="ajouter" value="Ajouter">
				</td>
				<td>
				<input type="reset" name="ajouter" value="Annuler">
				</td>
			</tr>
		</table>
	</form>
	</div>
</body>
</html>