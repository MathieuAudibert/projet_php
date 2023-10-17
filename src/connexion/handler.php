<?php 

require_once('./connexion/requetes.php');
require_once('./connexion/view.php');

function handler_connexion() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['connexion'])) {
            $email = $_POST['email_login'];
            $password = $_POST['mdp_login'];
            $resultat = authentification($email, $password);

            if ($resultat) {
                conn_succes();
            } else {
                conn_error();
            }
        }
    } else {
        display_connexion();
    }
}
