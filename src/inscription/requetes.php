<?php
require_once ('./bdd.php');
function inscription($username, $password, $email) {
    $dsn = "pgsql:host=localhost;dbname=fleurissimo;port=5432;";
    $db_username = "postgres";
    $db_password = "20221134";
    try {
        $pdo = new PDO($dsn, $db_username, $db_password);
        $requete = "INSERT INTO login(nom_u_login, mdp_login, email_login) VALUES (?, ?, ?)";
        $req = $pdo->prepare($requete);
        $mdp_sur = password_hash($password, PASSWORD_DEFAULT);
        $resultat = $requete->execute([$username, $mdp_sur, $email]);

        return $resultat;
    } catch (PDOException $e) {
        echo "Erreur de la base de données : " . $e->getMessage(); 
        return false;
    }
}



?>