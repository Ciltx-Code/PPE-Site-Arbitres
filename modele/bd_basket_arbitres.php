<?php
function getMatchs(){
	try{
		$cnx = connexionPDO();
		$req = $cnx->prepare("SELECT m.num_match, m.num_arbitre_p, m.num_arbitre_s, m.num_equipe_1, m.num_equipe_2, s.adresse_salle, m.date_match, m.heure_match, m.montant_déplt_p, m.montant_déplt_s FROM matchs m JOIN salle s ON m.num_salle = s.num_salle ORDER BY m.num_match");	
		$req->execute();

		$resultat = $req;
	} catch (PDOException $e) {
		print("Erreur !: " . $e->getMessage());
		die();
	}
	return $resultat;
}

function getSalles(){
	try{
		$cnx = connexionPDO();
		$req = $cnx->prepare("SELECT * FROM salle");
		$req->execute();

		$resultat = $req;
	} catch (PDOException $e) {
		print("Erreur !: " . $e->getMessage());
		die();
	}
	return $resultat;
}

function getEquipe(){
	try{
		$cnx = connexionPDO();
		$req = $cnx->prepare("SELECT * FROM equipe");
		$req->execute();

		$resultat = $req;
	} catch (PDOException $e) {
		print("Erreur !: " . $e->getMessage());
		die();
	}
	return $resultat;
}

function getArbitre(){
	try{
		$cnx = connexionPDO();
		$req = $cnx->prepare("SELECT * FROM arbitre");
		$req->execute();

		$resultat = $req;
	} catch (PDOException $e) {
		print("Erreur !: " . $e->getMessage());
		die();
	}
	return $resultat;
}

function addMatch($salle, $date, $heure, $equipe1, $equipe2, $arbitre1, $arbitre2, $mtn1, $mtn2){
	try{
		$cnx = connexionPDO();
		$req = $cnx->prepare("INSERT INTO matchs(num_match, num_salle, date_match, heure_match, num_equipe_1, num_equipe_2, num_arbitre_p, num_arbitre_s, montant_déplt_p, montant_déplt_s) values(NULL, ?,?,?,?,?,?,?,?,?)");
		$req->bindValue(1, $salle);
		$req->bindValue(2, $date);
		$req->bindValue(3, $heure);
		$req->bindValue(4, $equipe1);
		$req->bindValue(5, $equipe2);
		$req->bindValue(6, $arbitre1);
		$req->bindValue(7, $arbitre2);
		$req->bindValue(8, $mtn1);
		$req->bindValue(9, $mtn2);
		$req->execute();

		$resultat = $req;
	}catch (PDOException $e) {
		print("Erreur !: " . $e->getMessage());
		die();
	}
	return $resultat;
}

function getSalleByAdresse($adresse){
    try{
        $cnx= connexionPDO();
        $req= $cnx->prepare("SELECT num_salle FROM salle where adresse_salle=?");
        $req->bindValue(1,$adresse);
        $req->execute();
        while($ligne = $req -> fetch(PDO::FETCH_OBJ)){
        	$resultat=$ligne->num_salle;
        }

        
    }catch(PDOException $e){
        print("Erreur !: ". $e->getMessage());
        die();
    }
    return $resultat;
}

function getEquipeById($numEquipe){
    try{
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT * FROM equipe where num_equipe=?");
        $req -> bindValue(1,$numEquipe);
        $req->execute();
        while($ligne = $req -> fetch(PDO::FETCH_OBJ)){
        	$resultat = $ligne->nom_equipe;
        }
        
    } catch (PDOException $e) {
        print("Erreur !: " . $e->getMessage());
        die();
    }
    return $resultat;
}

function getArbitreById($numArbitre){
    try{
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT * FROM arbitre where num_arbitre=?");
        $req->bindValue(1,$numArbitre);
        $req->execute();
        while($ligne = $req -> fetch(PDO::FETCH_OBJ)){
        	$resultat = $ligne->nom_arbitre;
        }
    } catch (PDOException $e) {
        print("Erreur !: " . $e->getMessage());
        die();
    }
    return $resultat;
}

function modifMatch($salle, $date, $heure, $equipe1, $equipe2, $arbitre1, $arbitre2, $mtn1, $mtn2, $numMatch){
    try{
        $cnx = connexionPDO();
        $req = $cnx->prepare("UPDATE matchs set num_salle=?, date_match=?, heure_match=?, num_equipe_1=?, num_equipe_2=?, num_arbitre_p=?, num_arbitre_s=?, montant_déplt_p=?, montant_déplt_s=? where num_match=?");
        $req->bindValue(1, $salle);
        $req->bindValue(2, $date);
        $req->bindValue(3, $heure);
        $req->bindValue(4, $equipe1);
        $req->bindValue(5, $equipe2);
        $req->bindValue(6, $arbitre1);
        $req->bindValue(7, $arbitre2);
        $req->bindValue(8, $mtn1);
        $req->bindValue(9, $mtn2);
        $req->bindValue(10,$numMatch);
        $req->execute();

        $resultat = $req;
    }catch (PDOException $e) {
        print("Erreur !: " . $e->getMessage());
        die();
    }
    return $resultat;
}

function deleteMatch($numMatch){
    try{
        $cnx = connexionPDO();
        $req = $cnx->prepare("DELETE FROM matchs WHERE num_match=?");
        $req->bindValue(1, $numMatch);
        $req->execute();

        $resultat = $req;
    }catch (PDOException $e) {
        print("Erreur !: " . $e->getMessage());
        die();
    }
    return $resultat;
}
?>