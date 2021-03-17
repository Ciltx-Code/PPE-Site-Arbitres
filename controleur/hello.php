<?php
$btn = "Initialiser";
if (isset($_POST["btn"])){
	$btn = $_POST["btn"];
}
include"./modele/bd_connexion.php";
include "./modele/bd_basket_connexion.php";
include "./vue/vueAccueil.php";

$message = "";
$erreur = "";

switch ($btn){
	case "connexion" :
	login($_POST["email"],$_POST["psw"]);

	break;
}


?>