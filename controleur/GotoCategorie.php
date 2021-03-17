<?php

$btn = "Initialiser";
if (isset($_POST["btn"])){
	$btn = $_POST["btn"];
}
include"./modele/bd_connexion.php";
include "./modele/bd_basket_categorie.php";
include "./modele/bd_basket_connexion.php";



$message = "";
$erreur = "";
switch ($btn){
	case "Initialiser" :
	$_POST['nomcat']="";
	$_POST['mtnindemnite']="";
	break;

	case "Supprimer":
	delCategorie($_POST['NumCat']);
	header('Location: index.php?action=categorie');
	break;

	case 'Modifier':
	updateCategorie($_POST['NumCat'], $_POST['NomCat'], $_POST['MontantIndemnite']);
	header('Location: index.php?action=categorie');
	break;

	case "Enregistrer" :
	addCategorie($_POST['nomcat'], $_POST['mtnindemnite']);

	$message = $_POST["nomcat"]. "a été enregistré";
	header('Location: index.php?action=categorie');
	break;

	case "connexion" :
	login($_POST["email"], $_POST["psw"]);

	break;
}

include "./vue/vueCategorie.php";



?>