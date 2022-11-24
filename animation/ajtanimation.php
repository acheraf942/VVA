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
	<form action="ajoutanim.php" method="post">
		<h3>Ajouter une animation</h3>
		<table>
			<tr>
				<td>
				Code:
				</td>
				<td>
				<input type="text" name="codeanim">
				</td>

			</tr>
			<tr>
				<td>
				Code type:
				</td>
				<td>
				<select name="codetypeanim" onchange="combo(this,'theinput')">
					<?php
					$sql ="SELECT CODETYPEANIM, NOMTYPEANIM FROM type_anim";
					foreach  ($bdd->query($sql) as $row) {
					   echo "<option value=$row[CODETYPEANIM]>$row[NOMTYPEANIM]</option>";
					}
					?>

				</select>
				</td>

			</tr>
			<tr>
				<td>
				Nom:
				</td>
				<td>
				<input type="text" name="nomanim">
				</td>

			</tr>
			<tr>
				<td>
				Date de Création:
				</td>
				<td>
				<input type="date" name="datecreanim">
				</td>

			</tr>
			<tr>
				<td>
				Date de Validité:
				</td>
				<td>
				<input type="date" name="datevalidanim">
				</td>

			</tr>
			<tr>
				<td>
				Durée:
				</td>
				<td>
				<input type="number" name="dureeanim">
				</td>

			</tr>
			<tr>
				<td>
				Limite d'âge:
				</td>
				<td>
				<input type="number" name="ageanim">
				</td>

			</tr>
			<tr>
				<td>
				Tarif:
				</td>
				<td>
				<input type="number" name="tarifanim">
				</td>

			</tr>
			<tr>
				<td>
				Nombre de place:
				</td>
				<td>
				<input type="number" name="nbplaceanim">
				</td>
			</tr>
			<tr>
				<td>
				Description:
				</td>
				<td>
				<input type="text" name="descranim">
				</td>
			</tr>
			<tr>
				<td>
				Commentaire:
				</td>
				<td>
				<input type="text" name="comanim">
				</td>
			</tr>
			<tr>
				<td>
				Difficulté:
				</td>
				<td>
				<input type="text" name="difanim">
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