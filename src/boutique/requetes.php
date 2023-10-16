<?php
require_once('./bdd.php');

function requetes_boutique() {
    $dsn = "pgsql:host=localhost;dbname=fleurissimo;port=5432;";
    $db_username = "postgres";
    $db_password = "20221134";

    try {
        $pdo = new PDO($dsn, $db_username, $db_password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $requete = "SELECT * FROM fleurs";
        $req = $pdo->prepare($requete);
        $req->execute();
        $fleurs = $req->fetchAll(PDO::FETCH_ASSOC);

        return $fleurs;
    } catch (PDOException $e) {
        echo "Erreur de la base de données : " . $e->getMessage();
        return array();
    }
}

function obtenirFleurParID($id_fleurs) {
    $dsn = "pgsql:host=localhost;dbname=fleurissimo;port=5432;";
    $db_username = "postgres";
    $db_password = "20221134";

    try {
        $pdo = new PDO($dsn, $db_username, $db_password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $requete = "SELECT * FROM fleurs WHERE id_fleurs = :id_fleurs";
        $req = $pdo->prepare($requete);
        $req->bindParam(':id_fleurs', $id_fleurs, PDO::PARAM_INT);
        $req->execute();
        $fleur = $req->fetch(PDO::FETCH_ASSOC);

        return $fleur;
    } catch (PDOException $e) {
        echo "Erreur de la base de données : " . $e->getMessage();
        return null;
    }
}
