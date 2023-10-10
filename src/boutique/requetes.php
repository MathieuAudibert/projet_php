<?php
require_once('./bdd.php');

function requetes_boutique() {
    global $pdo;
    try {
        $requete = "SELECT * FROM fleurs"; 
        $req = $pdo->prepare($requete);
        $req->execute();
        $fleurs = $req->fetchAll(PDO::FETCH_ASSOC);
        return $fleurs;
    } catch (PDOException $e) {
        echo "Erreur de requête : " . $e->getMessage();
        return array();
    }
}

?>
