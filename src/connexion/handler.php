<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('./connexion/requetes.php');

function handler_connexion() {
    $connexionAffiche = false;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $connect = se_connecter($email, $password);
        $view = display_connexion($connect);
        echo $view;
        $connexionAffiche = true;
    } else {
        require_once('./connexion/view.php');
        if (isset($_GET['action']) && $_GET['action'] === 'inscription') {
            display_inscription();
        } else {
            if (!$connexionAffiche){
                display_connexion(false);
            }
        }
    }
}

handler_connexion();
