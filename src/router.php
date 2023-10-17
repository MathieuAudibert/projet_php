<?php
function route_request(){
    $route = $_SERVER['REQUEST_URI'];
    if ($route === '/'){
        require_once ('./homepage/handler.php');
        handler_homepage();
        return;
    }
    if ($route === '/boutique'){
        require_once ('./boutique/handler.php');
        handler_boutique();
        return;
    }
    if ($route === '/connexion'){
        require_once ('./connexion/handler.php');
        handler_connexion();
        return;
    }
    if ($route === '/inscription'){
        require_once ('./inscription/handler.php');
        handler_inscription();
        return;
    }
    if ($route === '/team'){
        require_once ('./team/handler.php');
        handler_team();
        return;
    }
    if ($route === '/panier'){
        require_once ('./panier/handler.php');
        handler_panier();
        return;
    }
    echo 'ERROR 404 NOT FOUND';
}
route_request();
?>