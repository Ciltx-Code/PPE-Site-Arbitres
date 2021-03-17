<?php
session_start();
function login($mail,$passwd)
{

  $connex = connexionPDO();
  
  // 1) Requête préparée SELECT : SELECT * FROM users WHERE username=?
  // 2) Envoyer la requête préparée au serveur et récupérer l'enregistrement
  // 3) Vérifier le mot de passe avec le hash du champ username : password_verify()

  $CheckConnexion = $connex->prepare("SELECT * FROM user WHERE mail_user=?");
  $CheckConnexion->bindValue(1, $mail);
  $CheckConnexion->execute();

  if($ligne = $CheckConnexion->fetch(PDO::FETCH_OBJ)) {
    $psw = $ligne->pwd_user;
    if (password_verify($passwd, $psw)) {
      $_SESSION["username"] = $ligne->nom_user;
      $_SESSION["id"]= $ligne->id_user;
      header("refresh:0"); 
    }
  }

}

?>