<?php

$btn = "Initialiser";
if (isset($_POST["btn"])){
	$btn = $_POST["btn"];
}

include('./modele/bd_connexion.php');
include"./modele/bd_basket_arbitres.php";
include "./modele/bd_basket_connexion.php";



$message = "";
$erreur = "";

switch ($btn){
	case "Initialiser" :
	$_POST['nomcat']="";
	$_POST['mtnindemnite']="";
	break;
	case "Supprimer":
	deleteMatch($_POST['num']);
	break;

	case 'Modifier':
	modifMatch($_POST['choixSalle'], $_POST['date'], $_POST['heure'], $_POST['choixEquipe1'], $_POST['choixEquipe2'], $_POST['arbitre1'], $_POST['arbitre2'], $_POST['mtn1'], $_POST['mtn2'], $_POST['num']);
	break;

	case "enregistrer" :
		addMatch($_POST['choixSalle'],$_POST['date'],$_POST['heure'],$_POST['choixEquipe1'],$_POST['choixEquipe2'],$_POST['arbitre1'],$_POST['arbitre2'],$_POST['mtn1'],$_POST['mtn2']);
		$message = $_POST["nomcat"]. "a été enregistré";
		header('Location: index.php?action=matchs');
	break;

	case "connexion" :
	login($_POST["email"],$_POST["psw"]);

	break;



}

include "./vue/vueMatchs.php";


?>