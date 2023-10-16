<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('./connexion/requetes.php');
require_once('./connexion/view.php');

function handler_connexion() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['connexion'])) {
            $email = $_POST['email_login'];
            $password = $_POST['mdp_login'];
            $auth_result = authentification($email, $password);

            if ($auth_result) {
                conn_succes();
            } else {
                conn_error();
            }
        }
    } else {
        display_connexion();
    }
}
