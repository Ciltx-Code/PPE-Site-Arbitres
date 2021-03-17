<?php

include "./modele/bd_basket_inscription.php";

$btn = "Initialiser";
if (isset($_POST["btn"])) {
    $btn = $_POST["btn"];
}

switch ($btn) {
    case "Initialiser" :
        $_POST['nom'] = "";
        $_POST['prenom'] = "";
        $_POST['pwd'] = "";
        $_POST['mail'] = "";
        $_POST['naissance'] = "";
        break;

    case "S'inscrire" :
        insertUser($_POST['pwd'], $_POST['mail'],$_POST['nom'],$_POST['prenom'],$_POST['naissance']);
        $message = $_POST["nom"]. $_POST['prenom'] . "a été enregistré";

        break;

}


include "./vue/vueInscription.php";
