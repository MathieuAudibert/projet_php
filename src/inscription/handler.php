<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('./inscription/requetes.php');
require_once('./inscription/view.php');

function handler_inscription() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['nom_u_login'];
        $password = $_POST['mdp_login'];
        $email = $_POST['email_login'];
        $result = inscription($username, $password, $email);
        if ($result) {
            inscr_succes();
        } else {
            inscr_error();
            header('Location : inscription');
        }
    } else {
        display_inscription();
    }
}

?>