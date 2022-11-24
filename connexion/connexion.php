<?php
session_start();
require_once'config.php';
if(isset($_POST['user']) && isset($_POST['mdp']))
{
	$user = htmlspecialchars($_POST['user']);
	$mdp = htmlspecialchars($_POST['mdp']);
	$check = $bdd->prepare('SELECT NOMCOMPTE, USER, MDP, TYPEPROFIL FROM compte WHERE USER = ?');
	$check->execute(array($user));
	$data = $check->fetch();
	$row = $check->rowCount();

	if($row ==1){
		$mdp = password_hash($mdp, PASSWORD_DEFAULT);
		if(password_verify($data['MDP'], $mdp)){
			$_SESSION['user'] = $data['USER'];
			$_SESSION['type'] = $data['TYPEPROFIL'];
			$_SESSION['pseudo'] = $data['NOMCOMPTE'];
			header('Location:../index.php');
		}else header('Location:accueil.php?login_err=mdp');
	}else header('Location:accueil.php?login_err=already');
}else header('Location:accueil.php');
