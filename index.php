<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body bgcolor="#112337" onload="initElement();">
<link rel="stylesheet" type="text/css" href="style.css">
        <header>
	<nav><ul>

			<?php 
			session_start();
			if (isset($_SESSION['user']))
			{
				if ($_SESSION['type']=="ad")
				{
				echo '<a href="connexion/deconnexion.php"><button>Se Deconnecter</button></a>
				<a href=""><button>'; echo $_SESSION['pseudo']; echo '</button></a>
			
			<li class="menu-html"><a href="activite/affactivite.php" class="partie">Activité</a>
			<ul class="submenu">
				<li><a href="activite/membreactivite.php">Selection de membre</a></li>
				<li><a href="activite/ajtactivite.php">Enregistrer une activité</a></li>
				<li><a href="activite/annactivite.php">Annuler une activité</a></li>
			</ul>
			</li>
			<li class="menu-html"><a href="animation/ajtanimation.php" class="partie">Animation</a></li>
			</ul>';
		}else
		{
			echo '<a href="connexion/deconnexion.php"><button>Se Deconnecter</button></a>
			<a href=""><button>'; echo $_SESSION['pseudo']; echo '</button></a>
			
			<li class="menu-html"><a href="index.php" class="partie">Accueil</a></li>
			<li class="menu-html"><a href="activite/affactivite.php" class="partie">Activité</a></li>
			<li class="menu-html"><a href="animation/affanimation.php" class="partie">Animation</a></li>
		</ul>';
		}
		}
		else
		{
			echo '<a href="connexion/accueil.php"><button>Se Connecter</button></a><li class="menu-html"><a href="index.php" class="partie">Accueil</a></ul>';
		}?>
	</nav></header></body>
</html>