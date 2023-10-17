<?php

require_once('./inscription/requetes.php');
require_once('./inscription/view.php');

function handler_inscription() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['nom_u_login'];
        $password = $_POST['mdp_login'];
        $email = $_POST['email_login'];
        $resultat = inscription($username, $password, $email);
        if ($resultat) {
            inscr_succes();
        } else {
            inscr_error();
            header('Location: inscription');
        }
    } else {
        display_inscription();
    }
}
