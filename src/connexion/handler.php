<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once ('./connexion/requetes.php');
function handler_connexion() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $connect = se_connecter($email, $password);
        return $connect;
    } else {
        require_once('./connexion/view.php');
        $connect = handler_connexion();
        $view = display_connexion($connect);
        echo $view;
    }
}    

handler_connexion();
 