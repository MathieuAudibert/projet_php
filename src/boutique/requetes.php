<?php
require_once('./bdd.php');

function requetes_boutique() {
    // Initialise la connexion à la base de données
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
