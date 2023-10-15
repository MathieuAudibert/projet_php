<?php
require_once ('./bdd.php');
function inscription($username, $password, $email) {
    $dsn = "pgsql:host=localhost;dbname=fleurissimo;port=5432;";
    $db_username = "postgres";
    $db_password = "20221134";
    try {
        $pdo = new PDO($dsn, $db_username, $db_password);
        $query = "INSERT INTO login(nom_u_login, mdp_login, email_login) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($query);
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $result = $stmt->execute([$username, $hashed_password, $email]);

        return $result;
    } catch (PDOException $e) {
        echo "Erreur de la base de données : " . $e->getMessage(); 
        return false;
    }
}
function authentification($username, $password) {
    $dsn = "pgsql:host=localhost;dbname=fleurissimo;port=5432;";
    $db_username = "postgres";
    $db_password = "20221134";
    try {
        $pdo = new PDO($dsn, $db_username, $db_password);
        $query = "SELECT mdp_login FROM login WHERE nom_u_login = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$username]);
        $hashed_password = $stmt->fetchColumn();

        if (password_verify($password, $hashed_password)) {
            return true;
        } else {
            return false;
        }
    } catch (PDOException $e) {
        echo "Erreur de la base de données : " . $e->getMessage(); 
        return false;
    }
}


?>