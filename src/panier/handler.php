<?php
require_once('./panier/view.php');
require_once('./panier/requetes.php');

session_start();

function handler_panier(){
    $view = display_panier();
    $request = requetes_panier();
    echo $request;
}

?>