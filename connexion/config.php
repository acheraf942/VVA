<?php
	try {
		
		$bdd = new PDO('mysql:host=localhost;dbname=gacti;charset-utf8','root','');
	}catch(Exeption $e)
	{
		die('Erreur'.$e->getMessage());
	}
?>