<?php
$dsn = "pgsql:host=localhost;dbname=fleurissimo;port=5432;";

$username = "postgres";
$password = "20221134";

try {
    $pdo = new PDO($dsn, $username, $password);
    echo 'Connexion réussie';
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}



?>