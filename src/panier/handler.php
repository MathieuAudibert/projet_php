<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('./panier/view.php');
require_once('./panier/requetes.php');
session_start();

function handler_panier() {
    $view = display_panier();
    echo $view;
}


