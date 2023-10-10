<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('./connexion/requetes.php');
require_once('./connexion/view.php');

function handler_connexion() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['nom_u_login'];
        $password = $_POST['mdp_login'];
        $email = $_POST['email_login'];
        $result = inscription($username, $password, $email);
        if ($result) {
            regis_succes();
        } else {
            regis_error();
        }
    } else {
        display_connexion();
    }
}

?>


